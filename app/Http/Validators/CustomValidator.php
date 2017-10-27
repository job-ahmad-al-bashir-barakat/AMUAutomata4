<?php

namespace App\Http\Validators;

use Modules\Utilities\Entities\SiteMenu;
use Validator;

class CustomValidator
{

    function ratio($attribute, $value, $parameters, $validator)
    {
        $route = \Route::getCurrentRoute()->parameters();
        $model = $route['model'];

        $file = \Request::file($model);
        $file = is_array($file) ? $file[0] : $file;

        $imageLocalConfig = config("file-upload.{$model}");
        $paramFromName    = explode(',_,' ,$file->getClientOriginalName());
        $ratio            = isset($paramFromName[1]) ?  $paramFromName[1] : false;

        if($ratio)
            $getRatio = collect($imageLocalConfig['ratio'])->get($ratio);
        else
            $getRatio = collect($imageLocalConfig['ratio'])->first();

        $dimensions = getimagesize($file->getPathname());

        $imageRatio  = number_format($dimensions[0]/$dimensions[1] ,1);
        $configRatio = number_format( $getRatio['width']/$getRatio['height'] ,1);

        return $imageRatio === $configRatio;
    }
}