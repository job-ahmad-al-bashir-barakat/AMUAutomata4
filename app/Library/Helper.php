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
    function tree($tree ,$group = 1,$maxDepth = 5 ,$extraParam = '')
    {
        $url = localizeURL("utilities/$tree/tree");

        return "<div data-url='$url' class='aut-tree $tree-tree' data-group='$group' data-max-depth='$maxDepth' data-storage-key='$tree-key' $extraParam></div>";
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

if(! function_exists('convertLangArrayToJsonObject'))
{
    function convertLangArrayToJsonObject($files = [])
    {
        $objects = [];
        foreach (LaravelLocalization::getSupportedLanguagesKeys() as $key)
        {
            $files_merge = [];
            foreach ($files as $file)
            {
                $files_merge = array_merge($files_merge , trans($file ,[] ,$key));
            }

            $init_object = [];
            foreach ($files_merge as $index => $item)
            {
                $init_object[$index] = [
                    'text'  => $item,
                    'title' => $item,
                ];
            }

            $objects[$key] = collect($init_object)->unique();
        }

        return collect($objects)->toJson();
    }
}

if(! function_exists('formClassHelper'))
{
    function formClassHelper($class) {

        $group       = false;
        $no_label    = false;
        $replacement = '';
        $labelClass  = '';
        $contClass   = '';
        $inputClass  = '';

        if(preg_match('/\b(?<![\S])(group)(?![\S])\b/',$class))
            $group = true;

        if(preg_match_all('/\b(?<![\S])(c:[\w\d-]+)(?![\S])\b/',$class,$results,PREG_PATTERN_ORDER)) {
            foreach ($results as $index => $result)
            {
                if ($index == 0)
                    foreach ($result as $item)
                    {
                        $replacement = "$replacement|$item";
                        $item = preg_replace('/\b(?<![\S])(c:)\b/','',$item);
                        $contClass = "$contClass $item";
                    }
            }
        }

        if(preg_match_all('/\b(?<![\S])(l:[\w\d-]+)(?![\S])\b/',$class,$results,PREG_PATTERN_ORDER)) {
            foreach ($results as $index => $result)
            {
                if ($index == 0)
                    foreach ($result as $item)
                    {
                        $replacement = "$replacement|$item";
                        $item = preg_replace('/\b(?<![\S])(l:)\b/','',$item);
                        $labelClass = "$labelClass $item";
                    }
            }
        }

        if(preg_match_all('/\b(?<![\S])(i:[\w\d-]+)(?![\S])\b/',$class,$results,PREG_PATTERN_ORDER)) {
            foreach ($results as $index => $result)
            {
                if ($index == 0)
                    foreach ($result as $item)
                    {
                        $replacement = "$replacement|$item";
                        $item = preg_replace('/\b(?<![\S])(i:)\b/','',$item);
                        $inputClass = "$inputClass $item";
                    }
            }
        }

        // remove class dialog from string
        $replacement = "group{$replacement}";

        // just class table
        $class = preg_replace("/\b(?<![\S])($replacement)(?![\S])\b/",'',$class);

        return ['group' => $group ,'contClass' => $contClass,'labelClass' => trim($labelClass),'inputClass' => trim($inputClass) ,'class' => trim($class)];
    }
}

if(! function_exists('lang'))
{
    function lang($col ,$value = '' ,$type)
    {
        switch ($type)
        {
            case 'all' : {

                $allLang = LaravelLocalization::getSupportedLanguagesKeys();
                $array = [];
                foreach ($allLang as $index => $lang)
                {
                    $array["{$col}_{$lang}"] = preg_replace('/{lang}/' ,$lang ,$value);
                }

                return $array;

            }; break;
        }
    }
}