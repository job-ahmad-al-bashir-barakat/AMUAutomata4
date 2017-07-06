<?php

namespace App\Library\Url;

class RouteUrls
{

    public function localizeUrl($url = '', $modular = '')
    {
        $locale = app()->getLocale();

        if($modular) $modular .= '/';

        return url("{$locale}/{$modular}{$url}");
    }

    public function langs()
    {
        return $this->localizeUrl('langs', 'utilities');
    }

    public function users()
    {
        return $this->localizeUrl('users', 'utilities');
    }

    public function attributes()
    {
        return $this->localizeUrl('attributes', 'utilities');
    }

    public function modules()
    {
        return $this->localizeUrl('modules', 'utilities');
    }

    public function customModules()
    {
        return $this->localizeUrl('custom-modules', 'utilities');
    }

    public function menus()
    {
        return $this->localizeUrl('menus', 'utilities');
    }
}