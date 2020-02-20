<?php

declare(strict_types=1);

namespace Modules\Admin\Repositories\Interfaces;

use Modules\Admin\Entities\Admin;
use Illuminate\Database\Query\Builder;

interface AdminRepositoryInterface
{
    public function create(array $data): Admin;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;

    public function getDataTableBuilder(): Builder;
    
    public function attachRole(int $admin_id, int $role_id):? bool;

    public function detachRole(int $admin_id, int $role_id):? int;
}
