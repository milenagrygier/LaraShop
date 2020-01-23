<?php

namespace Modules\Basket\Repositories\Interfaces;
use Modules\Basket\Entities\Pivots\BasketProducts;

interface BasketRepositoryInterface
{
    public function addItem(array $data): BasketProducts;

    public function removeItem(int $id): bool;

}
