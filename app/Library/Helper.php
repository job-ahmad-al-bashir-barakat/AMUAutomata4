<?php

use Illuminate\Support\Str;

if(! function_exists('localizeURL'))
{
    /**
     *
     * Return locale url
     *
     * @param $url
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    function localizeURL($url = '')
    {
        $url = Str::startsWith('/' ,$url) ? $url : "/$url" ;

        return url(\LaravelLocalization::getCurrentLocale().$url);
    }
}

if(! function_exists('pjax'))
{
    function pjax($url ,$prevent = false) {

        $prevent = $prevent ? "href='javascript:void(0);'" : "";

        $finalAjax = "$prevent href='$url'";

        return $finalAjax;
    };
}

if(! function_exists('colValue'))
{
    //get prob Val
    function colValue($col ,$obj)
    {
        if(preg_match('/->/',$col))
        {
            $setItem = $obj;
            foreach (explode('->' ,$col) as $item)
                $setItem = $setItem[$item];

            return $setItem;
        }
        else
            return $obj[$col];
    }
}

if(! function_exists('tree'))
{
    //get prob Val
    function tree($tree)
    {
        $url = localizeURL("utilities/$tree/tree");

        return "<div data-url='$url' class='aut-tree'></div>";
    }
}

if(! function_exists('treeUrl'))
{
    //get prob Val
    function treeUrl($tree)
    {
        return localizeURL("utilities/$tree/tree");
    }
}
