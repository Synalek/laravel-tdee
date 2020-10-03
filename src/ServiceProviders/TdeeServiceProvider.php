<?php

namespace Synalek\Tdee\ServiceProviders;

use isfonzar\TDEECalculator\TDEECalculator;

class TdeeServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '../config/tdee.php',
            'tdee'
        );

        $this->app->bind('tdee', function ($app) {
            return new TDEECalculator([
                'unit' =>  config('tdee.unit')
                ]
            );
        });

        $this->app->alias('tdee', TDEECalculator::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/tdee.php' => config_path('tdee.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['tdee'];
    }
}