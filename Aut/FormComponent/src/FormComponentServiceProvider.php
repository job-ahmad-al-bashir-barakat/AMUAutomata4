<?php

namespace Aut\FormComponent;

use Aut\FormComponent\Builder\FormBuilder;
use Illuminate\Support\ServiceProvider;

class FormComponentServiceProvider extends ServiceProvider
{
    public function __construct(\Illuminate\Foundation\Application $app)
    {
        parent::__construct($app);

        $this->registerConfig();
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = base_path('resources/views/form-component/default');

        $sourcePath = __DIR__.'/Resources/Views';

        $this->publishes([
            $sourcePath => $viewPath
        ]);

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/form-component';
        }, \Config::get('view.paths')), [$sourcePath]), 'form-component');
    }

    /**
     * register our lang
     */
    protected function loadTranslations()
    {
        $this->loadTranslationsFrom(__DIR__ . '/Resources/Lang', 'form-component');
    }

    /**
     * register our config
     */
    protected function registerConfig()
    {
        if(!file_exists(base_path('config/form-component.php')))
            $this->mergeConfigFrom(__DIR__.'/Config/form-component.php' ,'form-component');
    }

    protected function publishFormComponentConfigAndViews()
    {
        // publish config
        $this->publishes([
            __DIR__.'/Config/form-component.php' => config_path('form-component.php'),
        ], 'config');
    }

    /**
     * register our helper
     */
    protected function registerHelper()
    {
        require_once('Helper/helpers.php');
    }

    /**
     * register our singleton instance
     */
    protected function registerSingleton()
    {
        $this->app->singleton('FormComponent', function ($app) {
            return new FormBuilder();
        });
    }

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->registerViews();

        $this->loadTranslations();

        $this->publishFormComponentConfigAndViews();
    }

    public function register()
    {
        $this->registerHelper();
        $this->registerSingleton();
    }

    public function provides()
    {
        return ['FormComponent', 'Aut\FormComponent\Builder\FormBuilder'];
    }
}