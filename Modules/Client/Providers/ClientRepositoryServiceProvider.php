<?php

namespace Modules\Client\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Admin\Repositories\ClientAddressRepository;
use Modules\Client\Repositories\ClientRepository;
use Modules\Client\Repositories\Interfaces\ClientAddressRepositoryInterface;
use Modules\Client\Repositories\Interfaces\ClientRepositoryInterface;

class ClientRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ClientRepositoryInterface::class,
            ClientRepository::class
        );

        $this->app->bind(
            ClientAddressRepositoryInterface::class,
            ClientAddressRepository::class
        );
    }

}
