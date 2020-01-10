<?php

namespace PrioTicket\Authentication;

use Illuminate\Support\ServiceProvider;

class PrioAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('PrioTicket\Authentication\PrioAuthController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'prioauth');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/prioticket/authentication'),
        ]);
    }
}
