<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Intervention\Image\ImageManager;

class UploadController extends Controller
{
    public function uploadImage(Request $request){
        $this->validate($request, [
            'image'  => 'mimes:jpeg,jpg,bmp,png,mp4,avi,flv|max:100000',
            'upload'  => 'image|max:100000',//For CKEditor
            'image_url'  => 'max:10000000',//For Crop
        ]);
        $manager = new ImageManager(array('driver' => 'gd'));
        $image=$manager->make($request->files->get('image', $request->get('image_url', $request->get('upload',''))));
        $fileTempName=sha1(time() . (int)rand(100000, 1000000)). '.' .explode('/',$image->mime())[1];
        $image->save(storage_path('app\\public\\temp\\'.$fileTempName));
        return ['success'=>true,'filename'=>$fileTempName,'fileurl'=>url('storage/temp/'.$fileTempName)];
    }

    public function uploadDocument(Request $request){
        //if(URL::previous()!=localizeURL('admin/tabe'))return ['error'=>URL::previous().'<br>'.URL::previous()];
        //admin:add business document
        $this->validate($request, [
            'doc'  => 'mimes:txt,md,doc,text,docx,xls,pdf,zip|max:80000',
        ]);
        $file= $request->files->get('doc');
        $extention=pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $fileTempName =  ((int)rand(100000,1000000)).'.'.$extention;//public_path() . '/upload/temp/';
        Storage::disk('public')->put('temp/'.$fileTempName, file_get_contents($file->getRealPath()));
        // $upload_success = $file->move($destinationPath, $fileTempName);
        return ['sucess'=>true,'filename'=>$fileTempName];
    }
}
