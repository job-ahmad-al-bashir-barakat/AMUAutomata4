<?php

namespace Aut\FileUpload\Repositories;

use Aut\FileUpload\Entities\File;
use Aut\FileUpload\Entities\Image;

class FileRepository extends Upload
{
    function index () {

        return response()->json(['files' => $this->getFiles()]);
    }

    function upload() {

        $this->getFileName();
        $this->makeDirectory();

        if($this->isImage) {
            $this->getRatio();
            $this->moveResizeImage();
            $this->resizeThumps();
        }

        if($this->dbStore) {

            if($this->isImage)
                $this->saveImage();
            else
                $this->saveFile();

            $this->saveRelations();
        }

        if($this->isFile) {
            $this->moveFile();
        }

        return response()->json(["success" => true, $this->model => $this->storedFile ?? collect()]);
    }

    function destroy() {

        $this->destroyStorage();

        if($this->dbStore) {
            $this->destroyRelations();
            $this->destroyFile();
        }

        return response()->json(["success" => true]);
    }

    function info() {

        $image = Image::findOrFail(request('image_id'));

        $image->update(request()->input());
    }

    function getInfo() {

        $image = Image::where('id','=',request('image_id'));

        $info = [];
        if(config('fileupload.trans')) {
            $image = $image->allLangs()->first();
            $info = $image->lang_alt->pluck('text','lang_code');
        } else {
            $image = $image->first();
            foreach (\LaravelLocalization::getSupportedLanguagesKeys() as $key)
                $info[$key] = $image["alt_$key"];
        }

        return response()->json(['info' => $info]);
    }
}