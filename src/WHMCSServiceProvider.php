<?php

namespace HopekellDev\LaravelWHMCS;

use Illuminate\Support\ServiceProvider;

class WHMCSServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('whmcs', function ($app) {
            return new WHMCS();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/whmcs.php' => config_path('whmcs.php'),
        ], 'config');
    }
}
