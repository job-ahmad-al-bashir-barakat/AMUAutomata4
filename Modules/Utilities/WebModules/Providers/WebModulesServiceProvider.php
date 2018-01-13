<?php

namespace Modules\Utilities\WebModules\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Modules\Utilities\Entities\Table;

class WebModulesServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @param Route $route
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
        Route::group([
            'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect'],
            'prefix' => LaravelLocalization::setLocale(),
        ], function () {
            $localLang = app()->getLocale();
            $pageable = Table::pageable()->get();
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();

            foreach ($pageable as $table) {
                $morphCode = $table->morph_code;
                $model = $table->namespace;
                $column = $table->pageable_column;
                $lang = Str::startsWith($column, 'lang:');
                if ($lang) {
                    $column = explode(':', $column)[1];
                }
                $data = $model::all();
                foreach ($data as $datum) {
                    if ($lang) {
                        $route = $datum->{'lang_' . Str::snake($column)}[$localLang]->text;
                    } else {
                        $route = $datum->{$column};
                    }
                    $route = str_slug($route);
                    Route::get($route, function () use ($menu) {
                        $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
                        return view('modules', compact('menu', 'modules'));
                    })->name("{$morphCode}.{$datum->id}");

                }
            }
        });
    }

}