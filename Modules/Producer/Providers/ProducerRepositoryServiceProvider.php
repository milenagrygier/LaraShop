<?php

namespace Modules\Producer\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Producer\Repositories\Interfaces\ProducerRepositoryInterface;
use Modules\Producer\Repositories\ProducerRepository;

class ProducerRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ProducerRepositoryInterface::class,
            ProducerRepository::class
        );
    }
}
