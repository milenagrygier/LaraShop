<?php

declare(strict_types=1)

namespace Modules\Admin\Repositories;

use Illuminate\Support\Collection;
use Modules\Client\Entities\ClientAddress;

class ClientAddressRepository
{
    public function find(int $id): ?ClientAddress
    {
        return ClientAddress::where('id', $id)->first();
    }

    public function getByClientId(int $client_id): Collection
    {
        return ClientAddress::where('client_id', $client_id)->get();
    }

    public function create(array $data): ClientAddress
    {
        return ClientAddress::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return $this->find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return $this->find($id)->delete();
    }
}
