<?php

namespace Modules\Admin\Repositories\Interfaces;

use Modules\Admin\Entities\Pivots\RoleAdmin;

interface RoleAdminRepositoryInterface
{
    public function create(array $data): RoleAdmin;

    public function delete(int $id): bool;
}
