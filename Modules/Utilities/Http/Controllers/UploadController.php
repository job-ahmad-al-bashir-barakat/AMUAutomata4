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

    public $targetDirectory = '';

    public $stopRelationSave = false;

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

        // get path upload directory storage
        $uploadDirectory = isset($this->imageLocalConfig['upload_directory'])
            ? $this->imageLocalConfig['upload_directory']
            : $this->imageGeneralConfig[$routeParam['type']]['upload_directory'];

        // stop all relation oper
        $this->stopRelationSave = isset($this->imageLocalConfig['stopRelationSave'])
            ? $this->imageLocalConfig['stopRelationSave']
            : false;

        $folderUpload = Str::plural($routeParam['model']);

        $this->targetDirectory = "public\\$uploadDirectory\\$folderUpload";
        $this->uploadDirectory = "app\\public\\$uploadDirectory\\$folderUpload";
    }

    function index(Request $request ,$model ,$type) {

        $ids = $request->input('images_id');

        $images = [];

        if(!empty($ids)) {
            $images = Image::whereIn('id' ,$ids)->get();
        } else {
            // get from config model if is there isn't ids
        }

        return $images;
    }

    function upload(UploadFormRequest $request ,$model ,$type) {

        $file = $request->file($model);
        $file = is_array($file) ? $file[0] : $file;

        $paramFromName = explode(',_,' ,$file->getClientOriginalName());

        $clientOriginalName = $paramFromName[0];
        $ratio              = isset($paramFromName[1]) ?  $paramFromName[1] : false;

        if($ratio)
            $getRatio = collect($this->imageLocalConfig['ratio'])->get($ratio);
        else
            $getRatio = collect($this->imageLocalConfig['ratio'])->first();

        $path       = storage_path($this->uploadDirectory);
        $hashName   = strtolower(str_random(12))."_{$type}_". $clientOriginalName;

        // make directory if not exists
        Storage::makeDirectory($this->targetDirectory);

        // move with intervention
        $imgRezise = \Image::make($file->getRealPath());
        $imgRezise->resize($getRatio['width'], $getRatio['height'])->save("$path/$hashName");

        // it just move your image
        //$file->move($path ,$hashName);

        $extraParams =  [
            'name'      => $clientOriginalName,
            'hash_name' => $hashName,
            'ext'       => $file->getClientOriginalExtension(),
            'width'     => $getRatio['width'],
            'height'    => $getRatio['height'],
            'size'      => $file->getClientSize(),
        ];

        // save file inside file table
        $partFunc = Str::studly($type);
        $returnParam = $this->{"saveUpload{$partFunc}Db"}($extraParams);

        // set image thumps for image
        if(isset($this->imageLocalConfig['thumps'])) {

            //make thumps directory
            Storage::makeDirectory("$this->targetDirectory/thumps");

            foreach ($this->imageLocalConfig['thumps'] as $index => $thump) {

                //make thumps directory
                Storage::makeDirectory("$this->targetDirectory/thumps/$index");

                //resize thump image directory
                $imgRezise->resize($thump['width'], $thump['height'])->save("$path/thumps/$index/$hashName");
            }
        }

        if(!$this->stopRelationSave)
        {
            // get config model
            $dbModel = $this->imageLocalConfig['model'];

            // save relation file
            $dbModel = $dbModel::findOrFail($request->get('id'));
            // relationType has to be many or one
            if($this->relationType == 'many')
                $dbModel->image()->attach($returnParam->id);
            else
                $dbModel->update(["{$type}_id" => $returnParam->id]);
        }

        return array_merge(["success" => true], [$model => $returnParam]);
    }

    function destroy(Request $request ,$model ,$type) {

        request()->request->add(['transSaveOper' => false]);

        if(!$this->stopRelationSave)
        {
            // get config model
            $dbModel = $this->imageLocalConfig['model'];

            // save relation file
            $dbModel = $dbModel::findOrFail($request->get('id'));

            // relationType has to be many or one
            if($this->relationType == 'many')
                $dbModel->image()->detach($request->get('key'));
            else
                $dbModel->update(["{$type}_id" => null]);
        }

        //delete file from db
        $partFunc = Str::studly($type);
        $this->{"destroyUpload{$partFunc}Db"}($request->get('key'));

        // set storage path for file delete
        $path       = $this->targetDirectory;
        $hashName   = $request->get('file_name');
        // delete image from storage .. ps: this accept just file name but i pass full path.
        Storage::delete("$path\\$hashName");

        // delete image thumps for storge
        if(isset($this->imageLocalConfig['thumps'])) {

            //make thumps directory
            foreach ($this->imageLocalConfig['thumps'] as $index => $thump) {

                //resize thump image directory
                Storage::delete("$path\\thumps\\$index\\$hashName");
            }
        }


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

    protected function ratio(Request $request ,$model ,$type)
    {
        $routeParam = \Route::getCurrentRoute()->parameters();

        $this->imageLocalConfig   = config("file-upload.{$routeParam['model']}");

        return \response()->json(['ratio' => view('controle.component._crop_ratio' ,[ 'cropRatio' => $this->imageLocalConfig['ratio'] ])->render()]);
    }
}
