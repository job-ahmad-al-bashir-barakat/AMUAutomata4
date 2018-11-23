<?php

namespace Modules\Utilities\WebModules\Providers;

use Aut\SeoBuilder\Entities\Seo;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Modules\Utilities\Entities\MenuList;
use Modules\Utilities\Entities\BuilderPage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Modules\Utilities\Entities\MenuPage;
use Modules\Utilities\Entities\SiteMenu;

class WebModulesServiceProvider extends ServiceProvider
{
    protected $menu;
    protected $color = '1';

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
        if (!app()->runningInConsole())
        {
            $this->buildMenuRoutes(SiteMenu::all()->toTree());


            //view()->share(['menu' => $this->menu, 'color' => $this->color]);
        }
    }

    private function buildMenuRoutes($tree, $urlPrefix = '', $optional = '')
    {
        foreach ($tree as $item) {
            if (!$item->dynamic && $item->menuable) {
                $this->registerLangRoutes("{$urlPrefix}{$item->menuable->route}", "{$item->menuable_type}.{$item->menuable_id}.{$optional}");
            }
            if ($item->dynamic && $item->dynamic_info->count()) {
                $prefix = "{$item->dynamic}";
                if ($item->children->count()) {
                    foreach ($item->dynamic_info as $dynamicInfo) {
                        //@todo this code will break the cache because of not registering all the supported language
                        $dynamicPrefix = "{$prefix}/" . getSlug($dynamicInfo->id, $dynamicInfo->lang_name[app()->getLocale()]->text) ;
                        $this->buildMenuRoutes($item->children, "{$dynamicPrefix}/", $dynamicInfo->id);
                    }
                }
            }
            elseif ($item->children->count()) {
                $this->buildMenuRoutes($item->children);
            }
        }
    }

    private function registerLangRoutes($url, $name)
    {
//        logger('routes', [$url, $name]);
        $supportedLanguages = LaravelLocalization::getSupportedLanguagesKeys();
        foreach ($supportedLanguages as $supportedLanguage) {
            Route::get("{$supportedLanguage}/{$url}", function (){
                //@todo menu must be global var to make on call for it
                $menu = $this->getPageMenu();
                $color = $this->color;
                $modules = BuilderPage::pageModules()->get()->pluck('module');
                $seo = Seo::with(['graphImage', 'cardImage'])->pageSeo()->first();
                return view("modules", compact('menu', 'modules', 'seo', 'color'));
            })->name($name);
        }
    }

    private function getMenuTree($id = null)
    {
        $query = MenuList::with(['siteMenu' => function ($query) {
            $query->orderBy('order');
        }]);

        if (is_null($id)) {
            $query->where('is_default', true);
        } else {
            $query->where('id', $id);
        }

        return $query->get()->first()->siteMenu->toTree();
    }

    private function getPageMenu()
    {
        $menuPage = MenuPage::pageMenu()->first();
        if ($menuPage && $menuPage->count()) {
            $this->color = $menuPage->color;
            return $this->getMenuTree($menuPage->menu_id);
        }
        return $this->getMenuTree();
    }
}