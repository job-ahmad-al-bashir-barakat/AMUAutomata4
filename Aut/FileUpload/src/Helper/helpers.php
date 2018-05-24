<?php

use Illuminate\Support\Str;

if(! function_exists('fileUploadLocalizeURL'))
{
    /**
     *
     * Return locale url
     *
     * @param $url
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    function fileUploadLocalizeURL($url = '')
    {
        $url = Str::startsWith('/' ,$url) ? $url : "/$url" ;

        return url(\LaravelLocalization::getCurrentLocale().$url);
    }
}

if(! function_exists('fileUploadPosition'))
{
    /**
     * @return string
     */
    function fileUploadPosition($pascalCase = false)
    {
        if(LaravelLocalization::getCurrentLocaleDirection() == 'ltr')
            $position = 'left';
        else
            $position = 'right';

        return $pascalCase == true ? str($position)->toPascalCase() : $position;
    }
}

