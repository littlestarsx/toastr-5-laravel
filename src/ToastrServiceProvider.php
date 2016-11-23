<?php

namespace Fenxiangpaomo\Toastr;

use Illuminate\Support\ServiceProvider;

class ToastrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'Toastr');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/toastr'),
            __DIR__.'/config/toastr.php' => config_path('toastr.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['toastr'] = $this->app->share(function ($app) {
            return new Toastr($app['session'], $app['config']);
        });
    }

    public function provides()
    {
        return ['toastr'];
    }
}
