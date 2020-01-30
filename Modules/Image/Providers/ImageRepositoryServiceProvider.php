<?php

namespace Modules\Image\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Image\Repositories\ImageRepository;
use Modules\Image\Repositories\Intefaces\ImageRepositoryInterface;

class ImageRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ImageRepositoryInterface::class,
            ImageRepository::class
        );
    }

}
