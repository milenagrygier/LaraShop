<?php

declare(strict_types=1);

namespace Modules\Admin\Repositories\Interfaces;

use Modules\Admin\Entities\Pivots\RoleAdmin;

interface RoleAdminRepositoryInterface
{
    public function create(array $data): RoleAdmin;

    public function delete(int $id): bool;
}
