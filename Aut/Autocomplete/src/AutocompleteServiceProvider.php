<?php

namespace Aut\Autocomplete;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use LaravelLocalization;

class AutocompleteServiceProvider extends ServiceProvider
{
    /**
     * Vendor name.
     *
     * @var string
     */
    protected $vendor   = 'aut';

    /**
     * Package name.
     *
     * @var string
     */
    protected $package  = 'autocomplete';

    protected $commands = [
        \Aut\Autocomplete\Commands\MakeAutocompleteCommand::class,
    ];

    protected $namespace = 'Aut\Autocomplete\Http\Controllers';

    protected $middleware;

    public function boot(Router $router)
    {
        $this->routeMiddleware();

        $this->registerRoute($router);

        $this->publishAutocomplete();
    }

    private function publishAutocomplete()
    {
        // publish config
        $this->publishes([
            __DIR__.'/Config/autocomplete.php' => config_path('autocomplete.php')
        ], 'config');

        // publish assets
        $this->publishes([
            __DIR__.'/Assets' => public_path('vendor/autocompelte'),
        ], 'public');
    }

    private function registerRoute(Router $router)
    {
        if(config('autocomplete.isLangs'))
            $action = 'autocompleteLangs';
        else
            $action = 'autocomplete';

        $router->group(
            [
                'prefix'     => LaravelLocalization::setLocale(),
                'namespace'  => $this->namespace,
                'middleware' => $this->middleware
            ],
            function () use($action) {

                Route::get('autocomplete/{model}', "AutocompleteController@{$action}");
            });
    }

    private function routeMiddleware()
    {
        $routeMiddleware = config('autocomplete.routeMiddleware') == null
            ? ['web', 'localeSessionRedirect', 'localizationRedirect' ]
            : config('autocomplete.routeMiddleware');

        $this->middleware =  $routeMiddleware;
    }

    protected function registerController()
    {
        // register our controller
        $this->app->make('Aut\Autocomplete\Http\Controllers\AutocompleteController');
    }

    protected function registerHelper()
    {
        // add helper method to my project
        require_once('Helper/helpers.php');
    }

    function registerCommands()
    {
        $this->commands($this->commands);
    }

    protected function registerViews()
    {
        //register our view
        $this->loadViewsFrom(__DIR__.'/Resources/Views', 'autocomplete');
    }

    protected function registerConfig()
    {
        //register our config
        if(!file_exists(base_path('config/autocomplete.php')))
            $this->mergeConfigFrom(__DIR__.'/Config/autocomplete.php' ,'autocomplete');
    }

    public function register()
    {
        $this->registerController();
        $this->registerHelper();
        $this->registerCommands();
        $this->registerViews();
        $this->registerConfig();
    }
}