<?php

namespace Modules\Promotion\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Promotion\Repositories\Interfaces\PromotionRepositoryInterface;
use Modules\Promotion\Repositories\PromotionRepository;
use Modules\Promotion\Repositories\Interfaces\CodeRepositoryInterface;
use Modules\Promotion\Repositories\CodeRepository;

class PromotionRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PromotionRepositoryInterface::class,
            PromotionRepository::class
        );

        $this->app->bind(
            CodeRepositoryInterface::class,
            CodeRepository::class
        );
    }

}
