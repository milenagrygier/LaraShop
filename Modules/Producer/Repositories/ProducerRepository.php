<?php

declare(strict_types=1);

namespace Modules\Producer\Repositories;

use Modules\Producer\Repositories\Interfaces\ProducerRepositoryInterface;
use Illuminate\Support\Collection;
use Modules\Producer\Entities\Producer;

class ProducerRepository implements ProducerRepositoryInterface
{
    public function find(int $id): Producer
    {
        return Producer::where('id', $id)->with('products')->first();
    }

    public function get(int $id): Collection
    {
        return Producer::get();
    }

    public function update(array $data, int $id): bool
    {
        return Producer::where('id', $id)->first()->update($data);
    }

    public function delete(int $id): bool
    {
        return Producer::where('id', $id)->first()->delete();
    }

    public function attachProduct(int $producer_id, int $product_id):? bool
    {
        return Producer::where('id', $producer_id)->first()->products()->attach($product_id);
    }

    public function detachProduct(int $producer_id, int $product_id):? int
    {
        return Producer::where('id', $producer_id)->first()->products()->attach($product_id);
    }
}
