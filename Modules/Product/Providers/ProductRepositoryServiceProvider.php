<?php

namespace Modules\Product\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Product\Repositories\Interfaces\PriceRepositoryInterface;
use Modules\Product\Repositories\Interfaces\ProductImageRepositoryInterface;
use Modules\Product\Repositories\Interfaces\ProductRepositoryInterface;
use Modules\Product\Repositories\ProductRepository;
use Modules\Product\Repositories\PriceRepository;
use Modules\Product\Repositories\ProductImageRepository;

class ProductRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );

        $this->app->bind(
            PriceRepositoryInterface::class,
            PriceRepository::class
        );
    }

}
