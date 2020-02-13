<?php

declare(strict_types=1);

namespace Modules\Product\Repositories;

use Modules\Product\Repositories\Interfaces\PriceRepositoryInterface;
use Modules\Product\Entities\Price;

class PriceRepository implements PriceRepositoryInterface
{
    public function find(int $id): ?Price
    {
        return Price::where('id', $id)->first();
    }

    public function create(array $data): Price
    {
        return Price::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return $this->find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return $this->find($id)->delete();
    }
}
