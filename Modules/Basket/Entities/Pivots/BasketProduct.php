<?php

declare(strict_types=1);

namespace Modules\Basket\Entities\Pivots;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @property int $client_id
 * @property int $product_id
 */
class BasketProduct extends Pivot
{
    protected $fillable = [
        'client_id',
        'product_id'
    ];
}
