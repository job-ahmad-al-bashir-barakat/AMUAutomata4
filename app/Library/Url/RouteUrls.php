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

    public function attributeHtml()
    {
        return $this->localizeUrl('attribute/html', 'utilities');
    }

    public function moduleAttributesInputs()
    {
        return $this->localizeUrl('module/attributes', 'utilities');
    }

    public function pages()
    {
        return $this->localizeUrl('pages', 'utilities');
    }

    public function icons()
    {
        return $this->localizeUrl('icons', 'utilities');
    }

    public function builderPages()
    {
        return $this->localizeUrl('builder/pages', 'utilities');
    }

    public function sliders()
    {
        return $this->localizeUrl('builder/sliders', 'utilities');
    }

    public function verticalSliders()
    {
        return $this->localizeUrl('builder/vertical-sliders', 'utilities');
    }

    public function slider($id)
    {
        return $this->localizeUrl("builder/sliders/{$id}", "utilities");
    }

    public function verticalSlider($id)
    {
        return $this->localizeUrl("builder/vertical-sliders/{$id}", 'utilities');
    }

    public function blocks()
    {
        return $this->localizeUrl('builder/blocks', 'utilities');
    }

    public function block($id)
    {
        return $this->localizeUrl("builder/blocks/{$id}", 'utilities');
    }

    public function getBuilderPageModules()
    {
        return $this->localizeUrl('builder/modules', 'utilities');
    }

    public function menuTables()
    {
        return $this->localizeUrl('menu-tables', 'utilities');
    }
}