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
                if(isset($setItem[$item]))
                    $setItem = $setItem[$item];
                else
                    return;

            return $setItem;
        }
        else
            return $obj[$col];
    }
}

if(! function_exists('tree'))
{
    //get prob Val
    function tree($tree, $group = 1, $group_sourse = '', $maxDepth = 5, $class = '',$extraParam = [
        'data-type'                   => '',
        'data-empty-text'             => 'Drag Item Here',
        'data-init'                   => 'false',
        'data-drop'                   => 'false',
        'data-drop-exists'            => 'false',
        'data-clone'                  => 'false',
        'data-reject'                 => 'false',
        'data-disable-nest'           => 'false',
        'data-enable-auto-order-save' => 'false',
        'data-init-callback'          => '',
        'data-reject-rule-callback'   => '',
        'data-reject-action-callback' => '',
        'data-drag-end-callback'      => '',
    ])
    {
        $url = localizeURL("utilities/$tree/tree");

        $param = [
            'data-type'                   => '',
            'data-empty-text'             => 'Drag Item Here',
            'data-init'                   => 'false',
            'data-drop'                   => 'false',
            'data-drop-exists'            => 'false',
            'data-clone'                  => 'false',
            'data-reject'                 => 'false',
            'data-disable-nest'           => 'false',
            'data-enable-auto-order-save' => 'false',
            'data-init-callback'          => '',
            'data-reject-rule-callback'   => '',
            'data-reject-action-callback' => '',
            'data-drag-end-callback'      => '',
        ];

        $attrs = '';
        foreach (array_merge($param, $extraParam) as $index => $item)
            if(!empty($item)) {

                if(is_numeric($index))
                    $attrs .= "{$item} ";
                else
                    $attrs .= "{$index}={$item} ";
            }

        return "<div data-url='$url' class='aut-tree $tree-tree ajax $class' data-group='$group' data-group-source='$group_sourse' data-max-depth='$maxDepth' data-storage-key='$tree-key' $attrs></div>";
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

if(! function_exists('position')) {

    /**
     *
     * return position left => ltr or right => rtl
     *
     * @return string
     */
    function position($pascalCase = false)
    {
        if(LaravelLocalization::getCurrentLocaleDirection() == 'ltr')
        {
            $position = 'left';
        }
        else
        {
            $position = 'right';
        }

        return $pascalCase == true ? str($position)->toPascalCase() : $position;
    }
}


if(! function_exists('reversePosition')) {


    /**
     *
     * return position right => ltr or left => rtl
     *
     * @return string
     */
    function reversePosition($pascalCase = false)
    {
        if(LaravelLocalization::getCurrentLocaleDirection() == 'ltr')
        {
            $position = 'right';
        }
        else
        {
            $position = 'left';
        }

        return $pascalCase == true ? str($position)->toPascalCase() : $position;
    }
}

if(! function_exists('direction'))
{
    /**
     * @return string
     */
    function direction()
    {

        return LaravelLocalization::getCurrentLocaleDirection();
    }
}

if (!function_exists('buildHtmlTree')) {

    function buildHtmlTree($tree)
    {
        $html = '';
        foreach ($tree as $item) {
            $html .= "<li>";
            $html .= "<a href='#home'>{$item->title}</a>";
            if($item->children->count()){
                $html .= "<ul class='dropdown'>";
                $html .= buildHtmlTree($item->children);
                $html .= "</ul>";
            }
            $html .= "</li>";
        }
        return $html;
    }
}