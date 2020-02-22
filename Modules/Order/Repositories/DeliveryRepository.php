<?php

declare(strict_types=1);

namespace Modules\Order\Repositories;

use Modules\Order\Repositories\Interfaces\DeliveryRepositoryInterface;
use Modules\Order\Entities\Delivery;
use Illuminate\Database\Eloquent\Collection;

class DeliveryRepository implements DeliveryRepositoryInterface
{
    public function get(): Collection
    {
        return Delivery::get();
    }

    public function create(array $data): Delivery
    {
        return Delivery::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return Delivery::where('id', $id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Delivery::where('id', $id)->first()->delete();
    }
}
