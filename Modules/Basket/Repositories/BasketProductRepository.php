<?php

namespace Modules\Basket\Repositories;

use Modules\Basket\Entities\Pivots\BasketProduct;
use Modules\Basket\Repositories\Interfaces\BasketProductRepositoryInterface;

class BasketProductRepository implements BasketProductRepositoryInterface
{
    public function addItem(array $data): BasketProduct
    {
        return BasketProduct::create($data);
    }

    public function removeItem(int $id): bool
    {
        return BasketProduct::find($id)->delete();
    }
}
