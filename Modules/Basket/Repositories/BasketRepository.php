<?php

namespace Modules\Basket\Repositories;

use Modules\Basket\Entities\Pivots\BasketProducts;
use Modules\Basket\Repositories\Interfaces\BasketRepositoryInterface;

class BasketRepository implements BasketRepositoryInterface
{
    public function addItem(array $data): BasketProducts
    {
        return BasketProducts::create($data);
    }

    public function removeItem(int $id): bool
    {
        return BasketProducts::find($id)->delete();
    }
}
