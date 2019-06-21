<?php

namespace App\Foundation\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    public function register()
    {
        Route::middleware('web')
            ->group(base_path('app/Foundation/Routes/web.php'));

        Route::middleware('api')
            ->group(base_path('app/Foundation/Routes/api.php'));
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    public function mapWebRoutes(string $prefix, string $path, string $namespace)
    {
        Route::prefix($prefix)
            ->middleware('web')
            ->namespace($namespace . '\\'.'Web')
            ->group($path);
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    public function mapApiRoutes(string $prefix, string $path, string $namespace)
    {
        Route::prefix($prefix)
            ->middleware('api')
            ->namespace($namespace . '\\'.'Api')
            ->group($path);
    }
}
