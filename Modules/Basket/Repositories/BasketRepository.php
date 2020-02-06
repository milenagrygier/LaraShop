<?php

namespace Modules\Basket\Repositories;

use Modules\Basket\Entities\Basket;
use Modules\Basket\Repositories\Interfaces\BasketRepositoryInterface;

class BasketRepository implements BasketRepositoryInterface
{
    public function create(array $data): Basket
    {
        return Basket::create($data);
    }

    public function delete(int $id): bool
    {
        return Basket::find($id)->delete();
    }
}
