<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', 'App\Http\ViewComposer\GlobalComposer');
        view()->composer('control._content_header', 'App\Http\ViewComposer\GlobalComposer@path');
        view()->composer(['control._content_header'], 'App\Http\ViewComposer\GlobalComposer@langs');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
