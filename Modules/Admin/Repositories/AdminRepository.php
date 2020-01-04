<?php

namespace Modules\Admin\Repositories;

use Modules\Admin\Entities\Admin;
use Illuminate\Database\Query\Builder;
use Modules\Admin\Repositories\AdminRepositoryInterface;

class AdminRepository implements AdminRepositoryInterface
{
    public function create(array $data): Admin
    {
        return Admin::create($data);
    }

    public function update(array $data, integer $id): bool
    {
        return Admin::find($id)->update($data);
    }
    
    public function delete(integer $id): bool
    {
        return Admin::find($id)->delete();
    }

    public function getDataTableBuilder(): Builder
    {
        return Admin::select('id', 'email', 'username', 'email_verified_at', 'created_at', 'updated_at');
    }
}