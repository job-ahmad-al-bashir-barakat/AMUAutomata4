<?php

namespace App\Library\Form;

use Form;

class FormComponent
{
    public static function bsPrimarykey($id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        return Form::bsPrimarykey($id, $name, $value, $class, $attr);
    }

    public static function bsHidden($id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        return Form::bsHidden($id, $name, $value, $class, $attr);
    }

    public static function bsText($label = '', $id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        return Form::bsText($label, $id, $name, $value, $class, $attr);
    }

    public static function bsNumber($label = '', $id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        return Form::bsNumber($label, $id, $name, $value, $class, $attr);
    }

    public static function bsAutocomplete($label = '', $id = '', $name = '', $remote = '', $option = [], $letter = '3', $class = '', $attr = [])
    {
        return Form::bsNumber($label, $id, $name, $remote, $option, $letter, $class, $attr);
    }

    public static function bsSelect($label = '', $id = '', $name = '', $option = [], $selected = null, $class = '', $attr = [])
    {
        return Form::bsSelect($label, $id, $name, $option, $selected, $class, $attr);
    }

    public static function bsImageUpload($id = '', $name = '', $class = '', $param = '', $imageWidth = null, $imageHeight = null, $targetModel = ['modalId' => '', 'modalTitle' => '', 'modalWidth' => '700px',], $datatable = '', $datatableInitialize = 'true', $datatableInitializeProperty = '.image', $extraParameter = ['maxFileCount' => '0', 'minFileCount' => '0', 'minImageWidth' => null, 'minImageHeight' => null, 'maxImageWidth' => null, 'maxImageHeight' => null, 'allowedFileExtensions' => 'jpeg,jpg,bmp,png', 'appendLocation' => '', 'appendName' => '', 'reloadDatatable' => 'true', 'fileuploadedEvent' => '', 'filedeletedEvent' => '', 'allowedPreviewIcons' => 'false', 'autoReplace' => 'false', 'showCaption' => 'false', 'showPreview' => 'true', 'allowRatio' => 'false'])
    {
        return Form::bsImageUpload($id, $name, $class, $param, $imageWidth, $imageHeight, $targetModel, $datatable, $datatableInitialize, $datatableInitializeProperty, $extraParameter);
    }

    public static function bsImageUploadCropper($width = '90%', $single = false, $showName = true, $showType = false, $showOption = false, $showToggleOption = false, $showPreview = false, $previewType = ['lg', 'md', 'sm', 'xs'])
    {
        return Form::bsImageUploadCropper($width, $single, $showName, $showType, $showOption, $showToggleOption, $showPreview, $previewType);
    }

    public static function bsNotify($icon = '', $class = '', $text = '', $html = '')
    {
        return Form::bsNotify($icon, $class, $text, $html);
    }
}