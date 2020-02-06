<?php

namespace Modules\Basket\Repositories\Interfaces;
use Modules\Basket\Entities\Basket;

interface BasketRepositoryInterface
{
    public function create(array $data): Basket;

    public function delete(int $id): bool;

}
