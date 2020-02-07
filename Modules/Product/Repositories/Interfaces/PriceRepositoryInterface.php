<?php

declare(strict_types=1);

namespace Modules\Product\Repositories\Interfaces;

use Modules\Product\Entities\Price;

interface PriceRepositoryInterface
{
    public function find(int $id): ?Price;

    public function create(array $data): Price;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
