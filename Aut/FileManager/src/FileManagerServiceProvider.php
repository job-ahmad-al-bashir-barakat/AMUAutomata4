<?php

namespace Aut\FileManager;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use LaravelLocalization;
use Route;

class FileManagerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    protected $vendor   = 'aut';

    /**
     * Package name.
     *
     * @var string
     */
    protected $package  = 'FileManager';

    protected $namespace = 'Aut\FileManager';

    protected $middleware;

    public function boot(Router $router)
    {
        $routeMiddleware = '';
        if(preg_match('/filemanager/',\URL::current()))
            $routeMiddleware = aut_filemanager_getConfig($confType="middleware");

        $this->middleware = is_array($routeMiddleware) ? $routeMiddleware : [ 'web' ]; // 'auth'
        
        $this->mapRoutes($router);

        $this->publishFileManager();
    }

    protected function publishFileManager()
    {
        // publish config
        $this->publishes([
            __DIR__.'/Config/aut-filemanager.php' => config_path('aut-filemanager.php')
        ], 'config');

        // publish assets
        $this->publishes([
            __DIR__.'/Assets' => public_path('vendor/filemanager'),
        ], 'public');
    }

    /**
     * set route datatable
     *
     * @param $router
     */
    protected function mapRoutes($router)
    {
        $router->group([
            'prefix' => LaravelLocalization::setLocale().'/filemanager/',
            'namespace' => $this->namespace,
            'middleware' => $this->middleware
        ], function () {
            Route::get('ajax_calls', function () {
                return aut_filemanager_getConfig() ? view('FileManager::filemanager.ajax_calls') : abort('404');
            });
            Route::post('execute', function () {
                return aut_filemanager_getConfig() ? view('FileManager::filemanager.execute') : abort('404');
            });
            Route::any('uploader/index', function () {
                return aut_filemanager_getConfig() ? view('FileManager::filemanager.uploader.index') : abort('404');
            });
            Route::get('uploader/success', function () {
                return aut_filemanager_getConfig() ? view('FileManager::filemanager.uploader.success') : abort('404');
            });
            Route::post('force_download', function () {
                return aut_filemanager_getConfig() ? view('FileManager::filemanager.force_download') : abort('404');
            });
            Route::post('upload', function () {
                return aut_filemanager_getConfig() ? view('FileManager::filemanager.upload') : abort('404');
            });
            Route::get('dialog', function () {
                return aut_filemanager_getConfig() ? view('FileManager::filemanager.dialog') : abort('404');
            });
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerHelper();
        $this->registerConfig();
        $this->registerViews();
    }

    protected function registerViews()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/', 'FileManager');
    }

    protected function registerHelper()
    {
        require_once('Helper/helpers.php');
    }

    public function provides()
    {
        return ['FileManager', 'Aut\FileManager\FileManagerBuilder'];
    }

    private function registerConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/aut-filemanager.php', 'aut-filemanager'
        );
    }
}