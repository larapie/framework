<?php

namespace App\Foundation\Providers;

use Illuminate\Support\ServiceProvider;
use Larapie\Core\LarapieServiceProvider;
use Larapie\Generator\LarapieGeneratorServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(LarapieServiceProvider::class);

        if (!$this->app->environment('production'))
            $this->app->register(LarapieGeneratorServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
