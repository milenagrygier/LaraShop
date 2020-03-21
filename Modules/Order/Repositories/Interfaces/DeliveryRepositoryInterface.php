<?php

declare(strict_types=1);

namespace Modules\Order\Repositories\Interfaces;

use Modules\Order\Entities\Delivery;
use Illuminate\Database\Eloquent\Collection;

interface DeliveryRepositoryInterface
{
    public function get(): Collection;

    public function create(array $data): Delivery;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;
}
