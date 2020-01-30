<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Admin\Repositories\AdminRepository;
use Modules\Admin\Repositories\Interfaces\AdminRepositoryInterface;
use Modules\Admin\Repositories\RoleRepository;
use Modules\Admin\Repositories\Interfaces\RoleRepositoryInterface;
use Modules\Admin\Repositories\RoleAdminRepository;
use Modules\Admin\Repositories\Interfaces\RoleAdminRepositoryInterface;

class AdminRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            AdminRepositoryInterface::class,
            AdminRepository::class
        );

        $this->app->bind(
            RoleRepositoryInterface::class,
            RoleRepository::class
        );

        $this->app->bind(
            RoleAdminRepositoryInterface::class,
            RoleAdminRepository::class
        );
    }
}
