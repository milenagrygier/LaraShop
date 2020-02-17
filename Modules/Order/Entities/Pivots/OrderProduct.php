<?php

declare(strict_types=1);

namespace Modules\Order\Entities\Pivots;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @property int $order_id
 * @property int $product_id
 */
class OrderProduct extends Pivot
{
    protected $fillable = [
        'order_id',
        'product_id'
    ];

    protected $casts = [
        'order_id' => 'int',
        'product_id' => 'int'
    ];
}
