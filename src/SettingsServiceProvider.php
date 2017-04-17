<?php

namespace Tagtaste\Settings;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'courier');
         $this->publishes([
        __DIR__.'/assets' => public_path('Tagtaste/Settings'),
    ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->make('Tagtaste\Settings\SettingController');
        $this->app->make('Tagtaste\Settings\Setting');
    }
}
