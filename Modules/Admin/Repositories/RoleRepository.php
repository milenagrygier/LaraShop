<?php

namespace Modules\Admin\Repositories;

use Illuminate\Support\Collection;
use Modules\Admin\Entities\Role;
use Modules\Admin\Repositories\Interfaces\RoleRepositoryInterface;

class RoleRepository implements RoleRepositoryInterface
{
    public function find(int $id): ?Role
    {
        return Role::where('id', $id)->first();
    }

    public function all(): Collection
    {
        return Role::all();
    }

    public function create(array $data): Role
    {
        return Role::create($data);
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
