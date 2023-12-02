<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\MyService;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Bind the MyService class into the service container
        $this->app->bind(MyService::class, function ($app) {
            return new MyService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
