<?php

namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class CustomFormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * bs form
         */
        $this->bsPrimarykey();
        $this->bsHidden();
        $this->bsInputText();
        $this->bsInputNumber();
        $this->bsAutocomplete();
        $this->bsSelect();
        $this->bsImageUpload();
        $this->bsImageUploadCropper();
    }

    function bsInputText()
    {
        $this->input('text');
    }

    function bsInputNumber()
    {
        $this->input('number');
    }

    function bsAutocomplete()
    {
        Form::component('bsAutocomplete' ,'controle.component.form.autocomplete',[
            'label'       => '',
            'id'          => '',
            'name'        => '',
            'remote'      => '',
            'option'      => [],
            'letter'      => '3',
            'class'       => '',
            'attr'        => [],
        ]);
    }

    function bsSelect()
    {
        Form::component('bsSelect' ,'controle.component.form.select',[
            'label'       => '',
            'id'          => '',
            'name'        => '',
            'option'      => [],
            'selected'    => null,
            'class'       => '',
            'attr'        => [],
        ]);
    }

    function bsPrimarykey()
    {
        $this->hidden('primarykey');
    }

    function bsHidden()
    {
        $this->hidden('hidden');
    }

    function hidden($type)
    {
        $name = "bs".ucfirst($type);
        Form::component($name,'controle.component.form.hidden',[
            'id'             => '',
            'name'           => '',
            'value'          => null,
            'class'          => '',
            'attr'           => [],
            'type'           => $type,
        ]);
    }

    function input($type)
    {
        $name = "bs".ucfirst($type);
        Form::component($name,'controle.component.form.input',[
            'label'          => '',
            'id'             => '',
            'name'           => '',
            'value'          => null,
            'class'          => '',
            'attr'           => [],
            'type'           => $type,
        ]);
    }

    function bsImageUpload()
    {
        Form::component('bsImageUpload','controle.component.form.image_upload',[
            'id'                                 => '',
            'name'                               => '',
            'class'                              => '',
            'param'                              => '',
            'imageWidth'                         => '',
            'imageHeight'                        => '',
            'targetModel'                        => [
                'modalId'        => '',
                'modalTitle'     => '',
                'modalWidth'     => '700px',
            ],
            'datatable'                          => '',
            'datatableInitialize'                => 'true',
            'datatableInitializeProperty'        => '.image',
            'extraParameter'                     => [
                'maxFileCount'                   => '0',
                'minFileCount'                   => '0',
                'minImageWidth'                  => null,
                'minImageHeight'                 => null,
                'maxImageWidth'                  => null,
                'maxImageHeight'                 => null,
                'allowedFileExtensions'          => 'jpeg,jpg,bmp,png',
                'appendLocation'                 => '',
                'appendName'                     => '',
                'contCapture'                    => '.cont-uploaded',
                'itemCapture'                    => '.file-uploaded',
                'reloadDatatable'                => 'true',
                'fileuploadedEvent'              => '',
                'filedeletedEvent'               => '',
            ],
        ]);
    }

    function bsImageUploadCropper()
    {
        Form::component('bsImageUploadCropper','controle.component.form.image_cropper',[
            'width'             => '90%',
            'single'            => false,
            'showName'          => true,
            'showType'          => false,
            'showOption'        => false,
            'showToggleOption'  => false,
            'showPreview'       => false,
            'previewType'       => ['lg' ,'md' ,'sm' ,'xs']
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
