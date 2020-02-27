<?php

declare(strict_types=1);

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
        return Client::where('id', $id)->first()->update($data);
    }

    public function delete(int $id): bool
    {
        return Client::where('id', $id)->first()->delete();
    }

    public function attachContact(int $client_id, int $contact_id):? bool
    {
        return Client::where('id', $client_id)->first()->contact_forms()->attach($contact_id);
    }

    public function detachContact(int $client_id, int $contact_id):? int
    {
        return Client::where('id', $client_id)->first()->contact_forms()->detach($contact_id);
    }
}
