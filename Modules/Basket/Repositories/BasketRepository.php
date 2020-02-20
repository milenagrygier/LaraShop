<?php

declare(strict_types=1);

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
        return Basket::where('id', $id)->first()->delete();
    }

    public function attachProduct(int $basket_id, int $product_id):? bool
    {
        return Basket::where('id', $basket_id)->first()->products()->attach($product_id);
    }

    public function detachProduct(int $basket_id, int $product_id):? int
    {
        return Basket::where('id', $basket_id)->first()->products()->detach($product_id);
    }
}
