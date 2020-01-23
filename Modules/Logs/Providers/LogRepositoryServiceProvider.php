<?php

namespace Modules\Logs\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Logs\Repositories\LogRepository;
use Modules\Logs\Repositories\Interfaces\LogRepositoryInterface;

class LogRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            LogRepositoryInterface::class, 
            LogRepository::class
        );
    }
}
