<?php

namespace Modules\Product\Repositories\Interfaces;

use Modules\Product\Entities\Pivots\ProductImage;

interface ProductImageRepositoryInterface
{
    public function create(array $data): ProductImage;

    public function delete(int $id): bool;
}
