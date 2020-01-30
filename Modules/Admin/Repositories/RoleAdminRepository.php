<?php

namespace Modules\Admin\Repositories;

use Modules\Admin\Entities\Pivots\RoleAdmin;
use Modules\Admin\Repositories\Interfaces\RoleAdminRepositoryInterface;

class RoleAdminRepository implements RoleAdminRepositoryInterface
{
    public function create(array $data): RoleAdmin
    {
        return RoleAdmin::create($data);
    }

    public function delete(int $admin_id, int $role_id): bool
    {
        return RoleAdmin::where([
            ['admin_id' => $admin_id],
            ['role_id'  => $role_id ]
        ])->delete();
    }
}
