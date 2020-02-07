<?php

declare(strict_types=1)

namespace Modules\Client\Repositories\Interfaces;

use Modules\Client\Entities\Client;
use Illuminate\Database\Eloquent\Builder;

interface ClientRepositoryInterface
{
    public function find(int $id): ?Client;

    public function getDataTableBuilder(): Builder;

    public function create(array $data): Client;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
