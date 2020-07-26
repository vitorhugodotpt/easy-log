<?php

namespace VitorHugoDotPt\EasyLog;

use Illuminate\Support\ServiceProvider;

class EasyLogServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'vitorhugodotpt');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'easy-log');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->app['router']
            //->namespace('VitorHugoDotPt\EasyLog\\Controllers')
            ->middleware(['web'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });


        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/easylog.php', 'easylog');

        // Register the service the package provides.
        $this->app->singleton('easylog', function ($app) {
            return new EasyLog;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['easylog'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/easylog.php' => config_path('easylog.php'),
        ], 'easylog.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/vitorhugodotpt'),
        ], 'easylog.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/vitorhugodotpt'),
        ], 'easylog.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/vitorhugodotpt'),
        ], 'easylog.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
