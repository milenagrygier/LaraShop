<?php

declare(strict_types=1);

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property int $delivery_in_days
 * @property float $cost
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Delivery extends Model
{
    protected $fillable = [
        'name',
        'delivery_in_days',
        'cost',
    ];

    protected $casts = [
        'id' => 'int',
        'name' => 'string',
        'delivery_in_days' => 'int',
        'cost' => 'float',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
