<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/17/2017
 * Time: 12:05 AM
 */
function aut_filemanager_getConfig($confType="current_path"){
    $url=preg_match('/filemanager/',URL::previous())?$_COOKIE['aut_filemanager_url']:URL::previous();
    $resourceRoute = preg_replace('/(\/([0-9])*\/edit){0,1}(\/create){0,1}/', '',$url);
    $paths=config('aut-filemanager.paths');
    foreach ($paths as $key=>$value)
        if(localizeURL($key)==$resourceRoute)
            return $value[$confType];
    else return false;
}

if(!function_exists('localizeURL')){
    function localizeURL($url='')
    {
        $lang = (LaravelLocalization::getCurrentLocale()=='en'?'':LaravelLocalization::getCurrentLocale().'/');
        return url($lang.$url);
    }
}
