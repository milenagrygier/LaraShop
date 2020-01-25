<?php

namespace Modules\Product\Entities\Pivots;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductImage extends Pivot
{
    protected $fillable = [
        'product_id',
        'image_id'
    ];
}
