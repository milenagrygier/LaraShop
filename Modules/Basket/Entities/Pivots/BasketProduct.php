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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'client_id' => 'int',
        'product_id' => 'int',
    ];
}
