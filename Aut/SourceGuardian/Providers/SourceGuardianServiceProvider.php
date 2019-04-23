<?php
namespace Aut\SourceGuardian\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class SourceGuardianServiceProvider extends ServiceProvider
{
	
	public $namespace = 'Aut\SourceGuardian\Controllers';
	
    /**
     * Bootstrap the application services.
     *
     * @param Router $router
     */
    public function boot(Router $router)
    {
        $this->loadWebRoute();
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
    public function loadWebRoute()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->prefix('automata')
            ->group(__DIR__ . '\..\routes\web.php');
    }
}