<?php

if (!function_exists('aut_filemanager_getConfig')) {

    /**
     * @param string $confType
     * @return bool
     */
    function aut_filemanager_getConfig($confType = "current_path")
    {
        $url = preg_match('/filemanager/', URL::previous())
            ? $_COOKIE['aut_filemanager_url']
            : URL::previous();

        $resourceRoute = preg_replace('/(\/([0-9])*\/edit){0,1}(\/create){0,1}/', '', $url);

        $paths = config('aut-filemanager.paths');

        foreach ($paths as $key => $value)
            if (localizeURL($key) == $resourceRoute)
                return $value[$confType];
            else
                return false;
    }
}

if (!function_exists('localizeURL')) {

    /**
     * @param string $url
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    function localizeURL($url = '')
    {
        $url = \Illuminate\Support\Str::startsWith($url,'/') ? $url : "/{$url}" ;

        return url(\LaravelLocalization::getCurrentLocale()."$url");
    }
}
