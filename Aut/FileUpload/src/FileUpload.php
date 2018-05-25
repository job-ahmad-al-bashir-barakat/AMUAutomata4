<?php

namespace Aut\FileUpload;

use Form;

class FileUpload
{
    protected $filesUpload = [];

    protected $targetModel = [];

    protected $targetTabs = [];

    protected $tabs = [];

    protected $content = '';

    protected $render = false;

    function modal($modalId = '' ,$modalTitle = '' ,$modalWidth = '700px') {

        $this->render = true;

        $this->targetModel = [
            'id'    => $modalId,
            'title' => $modalTitle,
            'width' => $modalWidth
        ];

        return $this;
    }

    function tab($id = '', $title = '', $class = '', $active = false)
    {
        $this->render = true;

        $this->tabs[] = ['id' => $id ,'title' => $title ,'class' => $class ,'active' => $active];

        return $this;
    }

    function render()
    {
        // must be render
        if(!$this->render)
            return;

        // render tabs
        if(!empty($this->tabs))
            $html = view('fileupload::component.tabs',[
                'tabs'        => $this->tabs,
                'filesUpload' => $this->filesUpload
            ])->render();

        // render modal
        if(!empty($this->targetModel))
        {
            $html = empty($this->tabs) ? implode('',$this->filesUpload) : $html;
            $html = view('fileupload::component.modal',
                array_merge($this->targetModel,[
                    'content' => $html,
                    'hasTabs' => !empty($this->tabs)
                ])
            )->render();
        }

         return $html;
    }

    function ImageUpload
    (
        $id          = '',
        $name        = '',
        $class       = '',
        $param       = '',
        $imageWidth  = null,
        $imageHeight = null,
        $targetModel = [
            'modalId'    => '',
            'modalTitle' => '',
            'modalWidth' => '700px'
        ],
        $datatable                   = '',
        $datatableInitialize         = true,
        $datatableInitializeProperty = '.image',
        $extraParameter = [
            'minFileCount'          => '0',
            'maxFileCount'          => '0',
            'autoReplace'           => false,
            'minImageWidth'         => null,
            'minImageHeight'        => null,
            'maxImageWidth'         => null,
            'maxImageHeight'        => null,
            'allowedFileExtensions' => 'jpeg,jpg,bmp,png',
            'allowedPreviewIcons'   => false,
            'appendLocation'        => '',
            'appendName'            => '',
            'fileuploadedEvent'     => '',
            'filedeletedEvent'      => '',
            'reloadDatatable'       => true,
            'showCaption'           => false,
            'showPreview'           => true,
            'dropZoneEnabled'       => true,
            'allowRatio'            => false
        ]
    )
    {
        if ($this->render)
            $extraParameter = array_merge($extraParameter,['closeModal' => true]);

        $fileUpload = Form::ImageUpload($id, $name, $class, $param, $imageWidth, $imageHeight, $this->render ? [] : $targetModel, $datatable, $datatableInitialize, $datatableInitializeProperty, $extraParameter);

        if ($this->render) {
            $this->filesUpload[] = $fileUpload;

            return $this;
        }

        return $fileUpload;
    }

    function ImageUploadCropper(
        $width            = '90%',
        $single           = false,
        $showName         = true,
        $showType         = false,
        $showOption       = false,
        $showToggleOption = false,
        $showPreview      = false,
        $previewType      = ['lg', 'md', 'sm', 'xs'],
        $showManager      = false
    )
    {
        return Form::ImageUploadCropper($width, $single, $showName, $showType, $showOption, $showToggleOption, $showPreview, $previewType ,$showManager);
    }
}