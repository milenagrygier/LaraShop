<?php

namespace Modules\Basket\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Basket\Repositories\Interfaces\BasketRepositoryInterface;
use Modules\Basket\Repositories\BasketRepository;

class BasketRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            BasketRepositoryInterface::class,
            BasketRepository::class,
        );
    }
}
