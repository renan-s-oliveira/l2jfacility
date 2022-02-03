<?php

namespace DDDArtisan\Providers;

use Illuminate\Support\ServiceProvider;

class L2JFacilityServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/l2jfacility.php' => config_path('l2jfacility.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../config/l2jdatabase.php' => config_path('database.php'),
        ], 'config-database');
    }
}
