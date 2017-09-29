<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Modules\Utilities\Entities\Image;
use Modules\Utilities\Http\Requests\UploadFormRequest;
use App\Http\Controllers\Controller;
use Storage;

class UploadController extends Controller
{
    public $imageGeneralConfig = [];

    public $imageLocalConfig = [];

    public $uploadDirectory = '';

    public $relationType = '';

    function __construct()
    {
        $routeParam = \Route::getCurrentRoute()->parameters();

        $this->imageGeneralConfig = config("file-upload.setting");
        $this->imageLocalConfig   = config("file-upload.{$routeParam['model']}");

        // get config relationType
        $this->relationType = isset($this->imageLocalConfig['relationType'])
            ? $this->imageLocalConfig['relationType']
            : $this->imageGeneralConfig['relationType'];

        // get path directory storage
        $this->uploadDirectory = isset($this->imageLocalConfig['upload_directory'])
            ? $this->imageLocalConfig['upload_directory']
            : $this->imageGeneralConfig[$routeParam['type']]['upload_directory'];
    }

    function index(Request $request ,$model ,$type) {

        return 'done';
    }

    function upload(UploadFormRequest $request ,$model ,$type) {

        $file = $request->file($model);
        $file = is_array($file) ? $file[0] : $file;

        // todo : from this we will know what type of image is original or cropped or thumpnail
        // imageType this must stored in db
        $imageType = 'original';

        $path       = storage_path($this->uploadDirectory);
        $hashName   = strtolower(str_random(12))."_{$imageType}_". $file->getClientOriginalName();

        // move with intervention
        $imgRezise = \Image::make($file->getRealPath());
        $imgRezise->resize($this->imageLocalConfig['width'], $this->imageLocalConfig['height'])->save("$path/$hashName");

        // it just move your image
        //$file->move($path ,$hashName);

        $extraParams =  [
            'name'      => $file->getClientOriginalName(),
            'hash_name' => $hashName,
            'ext'       => $file->getClientOriginalExtension(),
            'width'     => $this->imageLocalConfig['width'],
            'height'    => $this->imageLocalConfig['height'],
            'size'      => $file->getClientSize(),
        ];

        // save file inside file table
        $partFunc = Str::studly($type);
        $returnParam = $this->{"saveUpload{$partFunc}Db"}($extraParams);

        // get config model
        $dbModel = $this->imageLocalConfig['model'];

        // save relation file
        $dbModel = $dbModel::findOrFail($request->get('id'));
        // relationType has to be many or one
        if($this->relationType == 'many')
            $dbModel->image()->attach($returnParam->id);
        else
            $dbModel->update(["{$type}_id" => $returnParam->id]);

        return array_merge(["success" => true], [$model => $returnParam]);
    }

    function destroy(Request $request ,$model ,$type) {

        // get config model
        $dbModel = $this->imageLocalConfig['model'];

        // save relation file
        $dbModel = $dbModel::findOrFail($request->get('id'));

        // relationType has to be many or one
        if($this->relationType == 'many')
            $dbModel->image()->detach($request->get('key'));
        else
            $dbModel->update(["{$type}_id" => null]);

        //delete file from db
        $partFunc = Str::studly($type);
        $this->{"destroyUpload{$partFunc}Db"}($request->get('key'));

        // set
        $path = storage_path($this->uploadDirectory."\\".$request->get('file_name'));
        // delete image from storage .. ps: this accept just file name bust i pass full path.
        Storage::delete($path);
        // remove symbolic link from image
        if(is_file($path))
            @unlink($path);

        return ["success" => true];
    }

    protected function saveUploadImageDb($extraParams) {

        request()->request->add(['transSaveOper' => false]);

        $image = Image::create($extraParams);

        return $image;
    }

    protected function destroyUploadImageDb($id) {

        Image::destroy($id);
    }

    //arrang image code //trans cropper
}
