<?php

declare(strict_types=1);

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Order\Entities\Status;
use Carbon\Carbon;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Payment;

/**
 * @property int $id
 * @property int $client_id
 * @property int $status_id
 * @property int $number
 * @property float $value
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Order extends Model
{
    protected $fillable = [
        'client_id',
        'status_id',
        'number',
        'value',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int',
        'client_id' => 'int',
        'status_id' => 'int',
        'number' => 'int',
        'value' => 'float',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function status()
    {
        return $this->hasOne(Status::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product');
    }

    public function payments()
    {
        return $this->belongsToMany(Payment::class, 'order_payments');
    }
}
