<?php

namespace Aut\FormComponent;

use Illuminate\Support\Facades\Facade;

class FormComponentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'FormComponent';
    }
}