<?php

namespace Modules\Order\Entities\Pivots;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderPayment extends Pivot
{
    protected $fillable = [
        'payment_id',
        'order_id'
    ];
}
