<?php

declare(strict_types=1)

namespace Modules\Client\Repositories\Interfaces;

use Illuminate\Support\Collection;
use Modules\Client\Entities\ClientAddress;

interface ClientAddressRepositoryInterface
{
    public function find(int $id): ?ClientAddress;

    public function getByClientId(int $client_id): Collection;

    public function create(array $data): ClientAddress;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
