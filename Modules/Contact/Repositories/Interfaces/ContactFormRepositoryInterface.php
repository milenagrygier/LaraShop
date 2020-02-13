<?php

declare(strict_types=1);

namespace Modules\Contact\Repositories\Interfaces;

use Modules\Contact\Entities\ContactForm;
use Illuminate\Database\Query\Builder;

interface ContactFormRepositoryInterface
{
    public function find(int $id): ?ContactForm;

    public function getDataTableBuilder(): Builder;

    public function create(array $data): ContactForm;

    public function delete(int $id): bool;
}
