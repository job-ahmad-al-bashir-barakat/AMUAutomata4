<?php

namespace Modules\Utilities\Providers;

use Illuminate\Support\ServiceProvider;

class RouteUtilitiesServiceProvider extends ServiceProvider
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

    }
}