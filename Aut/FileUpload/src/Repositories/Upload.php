<?php

namespace Aut\FileUpload\Repositories;

use Aut\FileUpload\Entities\File;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Support\Str;
use Storage;
use Route;

class Upload
{
    protected $fileGeneralConfig = [];
    protected $fileLocalConfig = [];
    protected $uploadDirectory = '';
    protected $targetDirectory = '';
    protected $uploadDirectoryPath = '';
    protected $stopRelationSave = false;
    protected $relationType = '';
    protected $relationName = '';
    protected $user_has_field = false;
    protected $user_has_folder = false;
    protected $dbStore = true;

    protected $model = '';
    protected $type = '';
    protected $file = null;
    protected $storedFile = null;
    protected $fileMimeType = '';
    protected $isImage = true;
    protected $isFile = true;
    protected $field = '';
    protected $name = '';
    protected $hashName = '';
    protected $ratio = [];
    protected $ratioType = false;
    protected $resizeImage = null;

    function init()
    {
        if (Route::getCurrentRoute() !== null) {
            $routeParam = Route::getCurrentRoute()->parameters();

            $this->model = $routeParam['model'];
            $this->type = $routeParam['type'];

            $this->fileGeneralConfig = config("fileupload.setting");
            $this->fileLocalConfig = config("fileupload.{$this->model}");
            $this->imageLocalConfig['ratio'] = $this->imageLocalConfig['ratio'] ?? [];

            $this->dbStore = isset($this->fileLocalConfig['db_store'])
                ? $this->fileLocalConfig['db_store']
                : config("fileupload.db_store");

            $this->user_has_folder = isset($this->fileLocalConfig['user_has_folder'])
                ? $this->fileLocalConfig['user_has_folder']
                : config('fileupload.user_has_folder');

            $this->user_has_field = isset($this->fileLocalConfig['user_has_field'])
                ? $this->fileLocalConfig['user_has_field']
                : config('fileupload.user_has_field');

            $user_field = config("fileupload.user_field");
            $user_field = new $user_field();
            $this->field = $user_field->userField();
            $this->field = isset($this->fileLocalConfig['model_field'])
                ? request()->get('id')
                : $this->field;

            $file = request()->file($this->model);
            $this->file = is_array($file) ? $file[0] : $file;
            $this->fileMimeType = preg_replace('/\/.+$/', '', $file ? $file->getMimeType() : request()->input('mime_type'));
            $this->isImage = $this->fileMimeType === 'image';
            $this->isFile = $this->fileMimeType !== 'image';

            $this->relationType = isset($this->fileLocalConfig['relationType'])
                ? $this->fileLocalConfig['relationType']
                : $this->fileGeneralConfig['relationType'];

            $this->relationName = isset($this->fileLocalConfig['relationName'])
                ? $this->fileLocalConfig['relationName']
                : $this->fileGeneralConfig['relationName'];

            $uploadDirectory = isset($this->fileLocalConfig['upload_directory'])
                ? $this->fileLocalConfig['upload_directory']
                : $this->fileGeneralConfig[$this->type]['upload_directory'];
            $uploadDirectory = preg_replace('/{type}/', $this->fileMimeType, $uploadDirectory);

            $this->stopRelationSave = isset($this->fileLocalConfig['stopRelationSave'])
                ? $this->fileLocalConfig['stopRelationSave']
                : false;

            $folderUpload = isset($this->fileLocalConfig['folderName'])
                ? $this->fileLocalConfig['folderName']
                : Str::plural($routeParam['model']);

            $userFolder = $this->user_has_folder ? "\\$this->field" : "";
            $this->targetDirectory = "public\\$uploadDirectory\\$folderUpload{$userFolder}";
            $this->uploadDirectory = "app\\public\\$uploadDirectory\\$folderUpload{$userFolder}";
            $this->uploadDirectoryPath = storage_path($this->uploadDirectory);
        }
    }

    function getFiles()
    {

        $ids = request()->input('files_id');

        $files = [];

        if (!empty($ids))
            $files = File::whereIn('id', $ids)->get();

        return $files;
    }

    function makeDirectory()
    {
        // make directory if not exists
        Storage::makeDirectory($this->targetDirectory);
    }

    function getFileName()
    {

        $paramFromName = explode(',_,', $this->file->getClientOriginalName());

        $this->name = $paramFromName[0];
        $field = $this->user_has_field ? "{$this->field}_" : "";
        $this->hashName = $field . strtolower(str_random(12)) . "_{$this->type}_" . $this->name;
        $this->ratioType = $paramFromName[1] ?? false;
    }

    function getRatio()
    {
        $dimensions = getimagesize($this->file->getPathname());
        $imageRatio = number_format($dimensions[0] / $dimensions[1], 1);

        $getRatio = null;

        if ($this->ratioType)
            $getRatio = collect($this->fileLocalConfig['ratio'])->get($this->ratioType);
        else {
            if(isset($this->fileLocalConfig['ratio']))
                foreach ($this->fileLocalConfig['ratio'] as $index => $currentRatio) {

                    $loopRatio = number_format($currentRatio['width'] / $currentRatio['height'], 1);

                    if ($loopRatio === $imageRatio) {

                        $getRatio = $currentRatio;

                        break;
                    }
                }
        }


        $this->ratio = $getRatio;
    }

    function moveResizeImage()
    {
        // move with intervention
        $imgRezise = \Image::make($this->file->getRealPath());
        if($this->ratio) {
            $imgRezise->resize($this->ratio['width'], $this->ratio['height']);
        }
        $imgRezise->save("$this->uploadDirectoryPath/$this->hashName");
        $this->resizeImage = $imgRezise;
    }

    function resizeThumps()
    {

        // set image thumps for image
        if (isset($this->fileLocalConfig['thumps'])) {

            //make thumps directory
            Storage::makeDirectory("$this->targetDirectory/thumps");

            foreach ($this->fileLocalConfig['thumps'] as $index => $thump) {

                //make thumps directory
                Storage::makeDirectory("$this->targetDirectory/thumps/$index");

                //resize thump image directory
                $this->resizeImage->resize($thump['width'], $thump['height'])->save("$this->uploadDirectoryPath/thumps/$index/$this->hashName");
            }
        }
    }

    function moveFile()
    {

        // it just move your file
        $this->file->move($this->uploadDirectoryPath, $this->hashName);
    }

    function saveImage()
    {
        request()->request->add(['transSaveOper' => false]);

        $this->storedFile = File::create([
            'name' => $this->name,
            'hash_name' => $this->hashName,
            'ext' => $this->file->getClientOriginalExtension(),
            'width' => $this->resizeImage->width(),
            'height' => $this->resizeImage->height(),
            'size' => $this->resizeImage->filesize(),
            'type' => $this->fileMimeType,
            'mime_type' => $this->file->getMimeType()
        ]);
    }

    function saveFile()
    {
        request()->request->add(['transSaveOper' => false]);

        $this->storedFile = File::create([
            'name' => $this->name,
            'hash_name' => $this->hashName,
            'ext' => $this->file->getClientOriginalExtension(),
            'size' => $this->file->getSize(),
            'type' => $this->fileMimeType,
            'mime_type' => $this->file->getMimeType()
        ]);
    }

    function saveRelations()
    {

        if (!$this->stopRelationSave) {
            // get config model
            $dbModel = $this->fileLocalConfig['model'];

            // relationName file or else
            $relationName = $this->relationName;

            // save relation file
            $dbModel = $dbModel::findOrFail(request()->get('id'));

            // relation params or extra update param
            $params = [];
            if (isset($this->fileLocalConfig['relationParam']) && count($this->fileLocalConfig['relationParam']))
                foreach ($this->fileLocalConfig['relationParam'] as $param)
                    $params[$param] = request()->input($param, $param);

            if (isset($this->fileLocalConfig['relationParamFixed']))
                $params = array_merge($params, $this->fileLocalConfig['relationParamFixed']);

            // relationType has to be many or one
            if ($this->relationType == 'many') {

                $attach = $this->storedFile->id;

                if (count($params))
                    $attach = [$this->storedFile->id => $params];

                $dbModel->{$relationName}()->attach($attach);

            } else {

                $relation = isset($this->fileLocalConfig['relationId'])
                    ? $this->fileLocalConfig['relationId']
                    : "{$this->fileMimeType}_id";

                $dbModel->update(array_merge([$relation => $this->storedFile->id], $params));
            }
        }
    }

    function destroyFile()
    {
        request()->request->add(['transSaveOper' => false]);

        File::destroy(request('key'));
    }

    function destroyRelations()
    {

        request()->request->add(['transSaveOper' => false]);

        if (!request('autoReplace', false))
            if (!$this->stopRelationSave) {
                // get config model
                $dbModel = $this->fileLocalConfig['model'];

                // relationName file or else
                $relationName = $this->relationName;

                // save relation file
                $dbModel = $dbModel::findOrFail(request('id'));

                // relationType has to be many or one
                if ($this->relationType == 'many') {
                    $dbModel->{$relationName}()->detach(request('key'));
                } else {

                    $imageId = isset($this->fileLocalConfig['relationId'])
                        ? $this->fileLocalConfig['relationId']
                        : "{$this->fileMimeType}_id";

                    $dbModel->update([$imageId => null]);
                }
            }
    }

    function destroyStorage()
    {

        $hashName = request('file_name');

        // delete file from storage
        Storage::delete("$this->targetDirectory\\{$hashName}");

        // delete thumps file from storage
        if (isset($this->fileLocalConfig['thumps'])) {
            foreach ($this->fileLocalConfig['thumps'] as $index => $thump) {
                Storage::delete("$this->targetDirectory\\thumps\\$index\\{$hashName}");
            }
        }
    }
}