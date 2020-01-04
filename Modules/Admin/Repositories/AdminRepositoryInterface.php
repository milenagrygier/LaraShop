<?php

namespace Modules\Admin\Repositories;

use Modules\Admin\Entities\Admin;
use Illuminate\Database\Query\Builder;

interface AdminRepositoryInterface
{
    public function create(array $data): Admin;

    public function update(array $data, integer $id): bool;
    
    public function delete(integer $id): bool;

    public function getDataTableBuilder(): Builder;
}