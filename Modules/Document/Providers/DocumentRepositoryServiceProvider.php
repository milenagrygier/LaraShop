<?php

namespace Modules\Document\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Document\Repositories\DocumentRepository;
use Modules\Document\Repositories\DocumentTypeRepository;
use Modules\Document\Repositories\Interfaces\DocumentRepositoryInterface;
use Modules\Document\Repositories\Interfaces\DocumentTypeRepositoryInterface;

class DocumentRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            DocumentTypeRepositoryInterface::class,
            DocumentTypeRepository::class
        );

        $this->app->bind(
            DocumentRepositoryInterface::class,
            DocumentRepository::class
        );
    }
}
