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

if(! function_exists('treeLocalizeUrl'))
{
    function treeLocalizeUrl($tree, $extra = '')
    {
        return url(\LaravelLocalization::getCurrentLocale()."/utilities/$tree/tree{$extra}");
    }
}

if(! function_exists('tree'))
{
    //get prob Val
    function tree($treeModel, $group = 1, $group_sourse = '', $maxDepth = 5, $class = '',$extraParam = [
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
        'data-param'                  => ''
    ])
    {
        if(is_array($treeModel)) {
            $tree       = $treeModel[0];
            $routeParam = $treeModel[1];
            $url = treeLocalizeUrl($tree, $routeParam);
        } else {
            $tree = $treeModel;
            $url = treeLocalizeUrl($tree);
        }

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
            'data-param'                  => ''
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

    /**
     * Need some refactoring
     *
     * @param $tree
     * @param string $urlPrefix
     * @return string
     */
    function buildHtmlTree($tree, $urlPrefix = '')
    {
        $html = '';
        foreach ($tree as $item) {
            $url = '#';
            $newPage = '';
            if ($item->url) {
                $url = $item->url;
                $newPage = 'target="_blank"';
            }
            if($item->menuable_type == 'page') {
                $url = RouteUrls::page("{$urlPrefix}{$item->menuable->route}");
            }
            $html .= "<li>";
            $html .= "<a href='{$url}' {$newPage}>{$item->title}</a>";
            if ($item->dynamic && $item->dynamic_info->count()) {// set the dynamic data as list
                $html .= "<ul class='dropdown'>";
                foreach ($item->dynamic_info as $info) {// set the children tree for each dynamic data list
                    $prefix = $item->dynamic. "/" . getSlug($info->id, $info->lang_name[app()->getLocale()]->text);
                    $html .= "<li>";
                    $html .= "<a href='{$url}'>" . $info->lang_name[app()->getLocale()]->text . "</a>";
                    if($item->children->count()){
                        $html .= "<ul class='dropdown'>";
                        $html .= buildHtmlTree($item->children, "{$prefix}/");
                        $html .= "</ul>";
                    }
                    $html .= "</li>";
                }
                $html .= "</ul>";
            } else if($item->children->count()){
                $html .= "<ul class='dropdown'>";
                $html .= buildHtmlTree($item->children);
                $html .= "</ul>";
            }
            $html .= "</li>";
        }
        return $html;
    }
}

if (!function_exists('replaceParamWithValue')) {

    function replaceParamWithValue($target ,$object)
    {
        if(preg_match_all('/{[a-z-A-Z_>]+}/' ,$target ,$results ,PREG_PATTERN_ORDER)) {

            foreach ($results[0] as $result)
            {
                $property = substr($result, 1, -1);

                $propArr = explode('->',$property);

                $obj = $object;

                foreach ($propArr as $prop)
                {
                    $obj = $obj[$prop];
                }

                $target = preg_replace("/$result/" ,$obj ,$target);
            }
        }

        return $target;
    }
}

if (!function_exists('getSlug')) {

    function getSlug($id, $text)
    {
        return str_slug("{$id}-{$text}");
    }
}

if (!function_exists('getIdFromSlug')) {
    function getIdFromSlug($slug)
    {
        $id = explode('-', $slug, 2)[0];
        return $id;
    }
}

if (!function_exists('setting')) {
    function setting($code)
    {
        return \Modules\Utilities\Entities\Setting::whereCode($code)->first();
    }
}

function getMetaNamespace()
{
    return 'amu_namespace';
}

if (!function_exists('renderSeoTags')) {
    function renderSeoTags($seo)
    {
        $builder = app('SeoBuilder',  ['seo' => $seo]);
        $html = $builder->renderSeoTags();
        return $html;
    }
}

if (!function_exists('getRouteOptionalValue')) {
    function getRouteOptionalValue()
    {
        $values = explode('.', \Route::currentRouteName());
        if (isset($values[2])) {
            return $values[2];
        }
        return null;
    }
}

if (!function_exists('facebookShare')) {
    /**
     * @param null $url default current Url
     * @return string
     */
    function facebookShare($url = null)
    {
        $sharedUrl = urlencode($url ?? Request::fullUrl());
        return "https://web.facebook.com/sharer/sharer.php?u={$sharedUrl}";
        //https://web.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&display=popup&ref=plugin&src=share_button
    }
}

if (!function_exists('twitterShare')) {
    /**
     * @param null $url default current Url
     * @return string
     */
    function twitterShare($url = null)
    {
        $sharedUrl = urlencode($url ?? Request::fullUrl());
        return "https://twitter.com/intent/tweet?url={$sharedUrl}";
    }
}

if (!function_exists('googleShare')) {
    /**
     * @param null $url default current Url
     * @return string
     */
    function googleShare($url = null)
    {
        $sharedUrl = urlencode($url ?? Request::fullUrl());
        return "https://plus.google.com/share?url={$sharedUrl}";
    }
}
