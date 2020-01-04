<?php

namespace Modules\Basket\Repositories;

interface BasketRepositoryInterface
{
    public function addItem(array $data): BasketProducts;

    public function removeItem(integer $id): boolean;
}