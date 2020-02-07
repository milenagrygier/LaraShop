<?php

declare(strict_types=1);

namespace Modules\Product\Repositories;

use Modules\Product\Repositories\Interfaces\ProductImageRepositoryInterface;
use Modules\Product\Entities\Pivots\ProductImage;

class ProductImageRepository implements ProductImageRepositoryInterface
{
    public function create(array $data): ProductImage
    {
        return ProductImage::create($data);
    }

    public function delete(int $id): bool
    {
        return ProductImage::find($id)->delete();
    }
}
