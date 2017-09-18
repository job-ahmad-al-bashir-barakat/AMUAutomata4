<?php

namespace App\Http\Validators;

use Validator;

class CustomValidator
{

    function ratio($attribute, $value, $parameters, $validator)
    {
            $route = \Route::getCurrentRoute()->parameters();
            $model = $route['model'];

            $imageGeneralConfig = config("file-upload.setting.{$route['type']}");
            $imageLocalConfig   = config("file-upload.{$model}");

            $file = \Request::file($model);
            $file = is_array($file) ? $file[0] : $file;

            $dimensions = getimagesize($file->getPathname());

            $imageRatio  = number_format($dimensions[0]/$dimensions[1] ,1);
            $configRatio = number_format( $imageLocalConfig['width']/$imageLocalConfig['height'] ,1);

            return $imageRatio === $configRatio;
    }
}