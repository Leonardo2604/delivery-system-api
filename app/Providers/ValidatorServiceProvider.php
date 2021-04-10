<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Validators\Contracts\Delivery\CreateDeliveryValidatorInterface::class,
            \App\Validators\V1\Delivery\CreateDeliveryValidator::class
        );

        $this->app->singleton(
            \App\Validators\Contracts\Delivery\UpdateDeliveryValidatorInterface::class,
            \App\Validators\V1\Delivery\UpdateDeliveryValidator::class
        );
    }
}
