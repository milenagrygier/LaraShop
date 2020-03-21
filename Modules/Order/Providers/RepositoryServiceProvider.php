<?php

namespace Modules\Order\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Order\Repositories\Interfaces\DeliveryRepositoryInterface;
use Modules\Order\Repositories\DeliveryRepository;
use Modules\Order\Repositories\Interfaces\OrderRepositoryInterface;
use Modules\Order\Repositories\OrderRepository;
use Modules\Order\Repositories\Interfaces\PaymentRepositoryInterface;
use Modules\Order\Repositories\PaymentRepository;
use Modules\Order\Repositories\Interfaces\StatusRepositoryInterface;
use Modules\Order\Repositories\StatusRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
           DeliveryRepositoryInterface::class,
           DeliveryRepository::class
        );

        $this->app->bind(
            OrderRepositoryInterface::class,
            OrderRepository::class
        );

        $this->app->bind(
            PaymentRepositoryInterface::class,
            PaymentRepository::class
        );

        $this->app->bind(
            StatusRepositoryInterface::class,
            StatusRepository::class
        );
    }
}
