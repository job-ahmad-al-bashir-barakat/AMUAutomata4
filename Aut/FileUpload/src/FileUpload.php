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

    private $extraParameter = [
        '*' => [
            'maxFileCount'          => '0',
            'minFileCount'          => '0',
            'minImageWidth'         => null,
            'minImageHeight'        => null,
            'maxImageWidth'         => null,
            'maxImageHeight'        => null,
            'packageAppend'         => true,
            'appendLocation'        => '',
            'appendName'            => '',
            'reloadDatatable'       => true,
            'fileuploadedEvent'     => '',
            'filedeletedEvent'      => '',
            'allowedPreviewIcons'   => false,
            'autoReplace'           => false,
            'showCaption'           => false,
            'showPreview'           => true,
            'allowRatio'            => false,
            'closeModal'            => true,
            'dropZoneEnabled'       => true,
            'cropper'               => true,
            'info'                  => true,
            'readOnly'              => false,
        ],
        'image' => [
            'previewFileType'             => 'image',
            'allowedFileTypes'            => 'image',
            'allowedFileExtensions'       => 'jpeg,jpg,png,gif,bmp,png',
            'accept'                      => "image/*",
        ],
        'video' => [
            'previewFileType'             => 'any',
            'allowedFileTypes'            => 'video,flash,object',
            'allowedFileExtensions'       => 'flv,avi,mov,mp4,mpg,wmv,3gp,asf,rm,swf,mkv',
            'accept'                      => 'video/*',
        ],
        'image-video' => [
            'previewFileType'             => 'any',
            'allowedFileTypes'            => 'image,video,flash,object',
            'allowedFileExtensions'       => 'jpeg,jpg,png,gif,bmp,png,flv,avi,mov,mp4,mpg,wmv,3gp,asf,rm,swf,mkv',
            'accept'                      => 'image/*,video/*',
        ],
        'file' => [
            'previewFileType'             => 'any',
            'allowedFileTypes'            => null,
            'allowedFileExtensions'       => null,
            'accept'                      => '*',
        ]
    ];

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

    function Upload
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
        $datatableInitializeProperty = '.file',
        $extraParameter = [],
        $type           = ''
    )
    {
        $extraParameter = array_merge($this->extraParameter['*'],$this->extraParameter[$type],$extraParameter);

        $fileUpload = Form::upload($id, $name, $class, $param, $imageWidth, $imageHeight, $this->render ? [] : $targetModel, $datatable, $datatableInitialize, $datatableInitializeProperty, $extraParameter, $type);

        if ($this->render) {
            $this->filesUpload[] = $fileUpload;
            return $this;
        }

        return $fileUpload;
    }

    function ImageUpload(
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
        $datatableInitializeProperty = '.file',
        $extraParameter = []
    )
    {
        return $this->Upload($id, $name, $class, $param, $imageWidth, $imageHeight, $targetModel, $datatable, $datatableInitialize, $datatableInitializeProperty, $extraParameter, 'image');
    }

    function VideoUpload(
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
        $datatableInitializeProperty = '.video',
        $extraParameter = []
    )
    {
        return $this->Upload($id, $name, $class, $param, $imageWidth, $imageHeight, $targetModel, $datatable, $datatableInitialize, $datatableInitializeProperty, array_merge($extraParameter,['cropper' => false,'info' => false]), 'video');
    }

    function ImageVideoUpload(
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
        $datatableInitializeProperty = '.file',
        $extraParameter = []
    )
    {
        return $this->Upload($id, $name, $class, $param, $imageWidth, $imageHeight, $targetModel, $datatable, $datatableInitialize, $datatableInitializeProperty, $extraParameter, 'image-video');
    }

    function FileUpload(
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
        $datatableInitializeProperty = '.file',
        $extraParameter = []
    )
    {
        return $this->Upload($id, $name, $class, $param, $imageWidth, $imageHeight, $targetModel, $datatable, $datatableInitialize, $datatableInitializeProperty, $extraParameter, 'file');
    }

    function ImageUploadCropper (
        $width            = '90%',
        $upload           = false,
        $showName         = true,
        $showType         = false,
        $showOption       = false,
        $showToggleOption = false,
        $showPreview      = false,
        $previewType      = ['lg', 'md', 'sm', 'xs']
    )
    {
        return Form::ImageUploadCropper($width, $upload, $showName, $showType, $showOption, $showToggleOption, $showPreview, $previewType);
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

        $this->render = false;

        return $html;
    }
}
