<?php

namespace Modules\Contact\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Contact\Repositories\Interfaces\TypeRepositoryInterface;
use Modules\Contact\Repositories\TypeRepository;
use Modules\Contact\Repositories\Interfaces\ContactFormRepositoryInterface;
use Modules\Contact\Repositories\ContactFormRepository;

class ContactRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            TypeRepositoryInterface::class,
            TypeRepository::class
        );

        $this->app->bind(
            ContactFormRepositoryInterface::class,
            ContactFormRepository::class
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
