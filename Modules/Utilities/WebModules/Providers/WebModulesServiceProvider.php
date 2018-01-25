<?php

namespace Modules\Utilities\WebModules\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class WebModulesServiceProvider extends ServiceProvider
{
    protected $menu;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->routesRegister();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function routesRegister()
    {
        $this->menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
        $this->buildMenuRoutes($this->menu);
    }

    private function buildMenuRoutes($tree, $urlPrefix = '')
    {
        foreach ($tree as $item) {
            if ($item->menuable) {
                $this->registerLangRoutes("{$urlPrefix}{$item->menuable->route}", "{$item->menuable_type}.{$item->menuable_id}");
            }
            if ($item->dynamic && $item->dynamic_info->count()) {
                $prefix = "{$item->dynamic}/{{$item->dynamic}}";
                if ($item->children->count()) {
                    $this->buildMenuRoutes($item->children, "{$prefix}/");
                }
            }
            elseif ($item->children->count()) {
                $this->buildMenuRoutes($item->children);
            }
        }
    }

    private function registerLangRoutes($url, $name)
    {
        $supportedLanguages = LaravelLocalization::getSupportedLanguagesKeys();
        //$supportedLanguages[''] = '';
        foreach ($supportedLanguages as $supportedLanguage) {
            Route::get("{$supportedLanguage}/{$url}", function (){
                //@todo menu must be global var to make on call for it
                $menu = $this->menu;
                $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
                return view("modules", compact('menu', 'modules'));
            })->name($name);
        }
    }

}