<?php

declare(strict_types=1);

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Modules\Order\Entities\Order;

/**
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Payment extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int',
        'name' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_payment');
    }
}
