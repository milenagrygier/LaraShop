<?php

namespace Modules\Order\Repositories\Interfaces;

use Modules\Order\Entities\Status;
use Illuminate\Support\Collection;

interface StatusRepositoryInterface
{
    public function find(int $id):? Status;

    public function all(): Collection;

    public function create(array $data): Status;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
