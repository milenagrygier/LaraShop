<?php

namespace Modules\Order\Repositories;

use Modules\Order\Repositories\Interfaces\StatusRepositoryInterface;
use Modules\Order\Entities\Status;
use Illuminate\Support\Collection;

class StatusRepository implements StatusRepositoryInterface
{
    public function find(int $id):? Status
    {
        return Status::where('id', $id)->first();
    }

    public function all(): Collection
    {
        return Status::get();
    }

    public function create(array $data): Status
    {
        return Status::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return Status::where('id', $id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Status::where('id', $id)->delete();
    }
}
