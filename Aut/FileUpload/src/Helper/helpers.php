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

if(! function_exists('getFileUploadStorage'))
{
    /**
     * @return string|array
     */
    function getFileUploadStorage($folderPath = 'public/upload/{type}/{model}',$objectId = '')
    {
        return [
            collect(\Storage::files($folderPath))->map(function ($item) use ($objectId) {

                if(string($item)->find($objectId)) {
                    preg_match('/(?!.*_)\w.+$/',basename($item),$name);
                    $name = $name[0];
                    $type = preg_replace('/\/.+$/', '', \Storage::mimeType($item));

                    return [
                        'id'        => \Auth::id(),
                        'type'      => $type,
                        'mime_type' => \Storage::mimeType($item),
                        'name'      => $name,
                        'hash_name' => basename($item),
                        'size'      => \Storage::size($item),
                        'url'       => url(\Storage::url($item))
                    ];
                }
            })->first()
        ];
    }
}

if (!function_exists('supportsWebp')) {
    function supportsWebp() {
        return strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false;
    }
}

if (!function_exists('getWebpSrc')) {
    function getWebpSrc($image)
    {
        $webp = str_replace(File::extension($image), 'webp', $image);
        if (supportsWebp() && File::exists($webp)) {
            return $webp;
        }
        return $image;
    }
}