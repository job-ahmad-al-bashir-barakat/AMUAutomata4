<?php

namespace Aut\FileUpload\Http\Controllers;

use Aut\Api\Api;
use Aut\FileUpload\Http\Requests\UploadFormRequest;
use App\Http\Controllers\Controller;
use Aut\FileUpload\Entities\Image;
use Aut\FileUpload\Repositories\FileRepository;
use Aut\FileUpload\Repositories\ImageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Route;
use Storage;

class UploadController extends Controller
{
    protected $file;

    function __construct(FileRepository $file) {

        if(Route::getCurrentRoute() !== null) {
            $this->file = $file;
            $this->middleware(function ($request, $next) {
                $this->file->init();
                return $next($request);
            });
        }
    }

    function index(Request $request ,$model ,$type) {

        return $this->file->index();
    }

    function upload(UploadFormRequest $request, $model, $type) {

        return $this->file->upload();
    }

    function destroy(Request $request ,$model ,$type) {

        return $this->file->destroy();
    }

    function info(Request $request ,$model ,$type)  {

        return $this->file->info();
    }

    function getInfo() {

        return $this->file->getInfo();
    }
}
