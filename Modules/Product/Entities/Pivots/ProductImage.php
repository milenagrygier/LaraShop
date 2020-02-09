<?php

declare(strict_types=1);

namespace Modules\Product\Entities\Pivots;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @property int $product_id
 * @property int $image_id
 */
class ProductImage extends Pivot
{
    protected $fillable = [
        'product_id',
        'image_id'
    ];

        /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'int',
        'image_id' => 'int',
    ];
}
