<?php

declare(strict_types=1);

namespace Modules\Basket\Repositories\Interfaces;

use Modules\Basket\Entities\Basket;

interface BasketRepositoryInterface
{
    public function create(array $data): Basket;

    public function delete(int $id): bool;

    public function attachProduct(int $basket_id, int $product_id):? bool;

    public function detachProduct(int $basket_id, int $product_id):? int;
}
