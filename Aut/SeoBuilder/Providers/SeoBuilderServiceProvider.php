<?php

namespace Aut\SeoBuilder\Providers;

use Aut\SeoBuilder\SeoBuilder;
use Illuminate\Support\ServiceProvider;
use Arcanedev\SeoHelper\Contracts\SeoHelper;

class SeoBuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslations();
        $this->registerPublishes();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->bindSeoBuilder();
        $this->loadConfig();
        $this->loadView();
    }

    private function loadTranslations()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'seo_builder');
    }

    private function loadView()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'seo_builder');
    }

    private function loadConfig()
    {
        $packageConfigFile = __DIR__ . '/../Config/config.php';

        $this->mergeConfigFrom(
            $packageConfigFile, 'seo-builder'
        );
    }

    private function bindSeoBuilder()
    {
        $this->app->singleton('SeoBuilder', function ($app, $parameters) {
            return new SeoBuilder($app->make(SeoHelper::class), $parameters['seo']??null);
        });
    }

    private function registerPublishes()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('seo-builder.php'),
        ], 'config');
    }
}
