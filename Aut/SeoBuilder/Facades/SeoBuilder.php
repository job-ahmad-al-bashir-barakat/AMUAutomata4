<?php

namespace Aut\SeoBuilder\Facades;

use Illuminate\Support\Facades\Facade;

class SeoBuilder extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'SeoBuilder'; }
}