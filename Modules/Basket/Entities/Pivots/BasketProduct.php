<?php

namespace Modules\Basket\Entities\Pivots;

use Illuminate\Database\Eloquent\Relations\Pivot;

class BasketProduct extends Pivot
{
    protected $fillable = [
        'client_id',
        'product_id'
    ];
}
