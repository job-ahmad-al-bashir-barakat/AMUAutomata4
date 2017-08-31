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
