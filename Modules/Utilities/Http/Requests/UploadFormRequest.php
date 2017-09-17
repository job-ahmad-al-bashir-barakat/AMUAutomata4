<?php

namespace Modules\Utilities\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $route = \Route::getCurrentRoute()->parameters();
        $model = $route['model'];

        $imageGeneralConfig = config("file-upload.setting.{$route['type']}");
        $imageLocalConfig   = config("file-upload.{$model}");

        $validate  = isset($imageLocalConfig['validate'])
            ? $imageLocalConfig['validate']
            : $imageGeneralConfig['validate'];

        return [
            $model => $validate
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
