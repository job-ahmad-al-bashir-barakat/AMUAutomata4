<?php
namespace Modules\Utilities\Traits;

use Modules\Utilities\Scopes\LangInfoScope;
trait LangInfo
{
    /**
     * Boot the Multi Lang trait for a model.
     *
     * @return void
     */
    public static function bootLangInfo()
    {
        static::addGlobalScope(new LangInfoScope);
    }
}