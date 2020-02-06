<?php

declare(strict_types=1);

namespace Modules\Basket\Repositories\Interfaces;

use Modules\Basket\Entities\Pivots\BasketProduct;

interface BasketProductRepositoryInterface
{

    public function addItem(array $data): BasketProduct;

    public function removeItem(int $id): bool;

}
