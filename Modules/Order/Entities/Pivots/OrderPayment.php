<?php

declare(strict_types=1);

namespace Modules\Order\Entities\Pivots;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @property int $payment_id
 * @property int $order_id
 */

class OrderPayment extends Pivot
{
    protected $fillable = [
        'payment_id',
        'order_id'
    ];
}
