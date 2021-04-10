<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Services\Contracts\DeliveryServiceInterface::class,
            \App\Services\V1\DeliveryService::class
        );
    }
}
