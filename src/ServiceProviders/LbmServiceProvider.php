<?php

namespace Synalek\Tdee\ServiceProviders;

use isfonzar\TDEECalculator\LBMCalculator;

class LbmServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/tdee.php',
            'tdee'
        );

        $this->app->bind('lbm', function ($app) {
            return new LBMCalculator([
                'unit' =>  config('tdee.unit')
                ]
            );
        });

        $this->app->alias('lbm', LBMCalculator::class);
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
        return ['lbm'];
    }
}