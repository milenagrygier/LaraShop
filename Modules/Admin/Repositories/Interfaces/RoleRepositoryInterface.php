<?php

declare(strict_types=1);

namespace Modules\Admin\Repositories\Interfaces;

use Illuminate\Support\Collection;
use Modules\Admin\Entities\Role;

interface RoleRepositoryInterface
{
    public function find(int $id): ?Role;

    public function all(): Collection;

    public function create(array $data): Role;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
