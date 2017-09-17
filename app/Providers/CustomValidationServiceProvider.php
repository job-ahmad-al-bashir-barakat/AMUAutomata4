<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class CustomValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('ratio', 'App\Http\Validators\CustomValidator@ratio');
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
