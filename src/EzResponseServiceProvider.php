<?php

namespace tyasa81\EzResponse;

use Illuminate\Support\ServiceProvider;
use tyasa81\EzResponse\Commands\EzResponseCommand;

class EzResponseServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->registerMigrations(__DIR__.'/../database/migrations');
        //     // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/ezresponse.php', 'ezresponse');

        //     // Register the main class to use with the facade
        //     $this->app->singleton('task', function () {
        //         return new Task;
        //     });
        //     // $this->app->bind('task', function () {
        //     //     return new Task();
        //     // });
    }
}
