<?php

namespace Modules\Basket\Repositories;
use Modules\Basket\Entities\Pivots\BasketProducts;

interface BasketRepositoryInterface
{
    public function addItem(array $data): BasketProducts;

    public function removeItem(integer $id): bool;
}