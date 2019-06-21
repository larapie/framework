<?php

namespace App\Modules\User\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\User\Contracts\UserRepositoryContract;
use App\Modules\User\Contracts\UserServiceContract;
use App\Modules\User\Repositories\UserRepository;
use App\Modules\User\Services\UserService;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
