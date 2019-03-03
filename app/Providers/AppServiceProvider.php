<?php

namespace App\Providers;

use Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Modules\Utilities\Entities\Lang;
use Modules\Utilities\Entities\Table;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setDefaultSchemaStringLength();
        $this->setMorphMap();
        $this->setLaravelLocalizationConfig();
    }

    /**
     * Default Schema String Length
     */
    function setDefaultSchemaStringLength()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Menu morph
     */
    function setMorphMap()
    {
        if(Schema::hasTable('tables')) {

            $morphed = Table::morphed()->get()->pluck('namespace', 'morph_code')->map(function ($item){
                return trim($item, '\\');
            })->toArray();
            Relation::morphMap($morphed);
        }
    }

    /**
     * set laravellocalization config
     */
    function setLaravelLocalizationConfig()
    {
        if(Schema::hasTable('langs')) {

            if(Lang::count()) {

                \Config::set('laravellocalization.supportedLocales', Lang::all()
                    ->groupBy('lang_code')
                    ->map(function ($value, $index) {

                    $value = $value->first();

                    return [
                        'name' => $value->name,
                        'script' => is_null($value->script) ? '' : $value->script,
                        'native' => $value->native,
                        'regional' => is_null($value->regional) ? '' : $value->regional,
                    ];

                })->toArray());

                LaravelLocalization::setSupportedLocales(config('laravellocalization.supportedLocales'));
            }
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if($this->app->environment('production')) {

            // force https
            $this->app['request']->server->set('HTTPS', true);

            // set db config
            $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

            $host = $url["host"];
            $username = $url["user"];
            $password = $url["pass"];
            $database = substr($url["path"], 1);

            Config::set('database.connections.mysql.host',$host);
            Config::set('database.connections.mysql.username',$username);
            Config::set('database.connections.mysql.password',$password);
            Config::set('database.connections.mysql.database',$database);
        }

        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
            $this->app->register(\JeroenG\Packager\PackagerServiceProvider::class);
            $this->app->register(\Orangehill\Iseed\IseedServiceProvider::class);
            $this->app->register(\Way\Generators\GeneratorsServiceProvider::class);
            $this->app->register(\Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class);
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);

            $this->app->alias(Barryvdh\Debugbar\Facade::class, 'Debugbar');
        }
    }
}
