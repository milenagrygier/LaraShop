<?php

declare(strict_types=1)

namespace Modules\Client\Repositories;

use Modules\Client\Entities\Client;
use Illuminate\Database\Eloquent\Builder;
use Modules\Client\Repositories\Interfaces\ClientRepositoryInterface;

class ClientRepository implements ClientRepositoryInterface
{
    public function find(int $id): ?Client
    {
        return Client::where('id', $id)->first();
    }

    public function getDataTableBuilder(): Builder
    {
        return Client::select('id', 'username', 'email', 'first_name', 'last_name', 'created_at', 'updated_at');
    }

    public function create(array $data): Client
    {
        return Client::create($data);
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
