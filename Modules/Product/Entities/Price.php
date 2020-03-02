<?php

declare(strict_types=1);

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * @property int $id
 * @property int $product_id
 * @property string $name
 * @property int $amount
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Price extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'amount'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int',
        'product_id' => 'int',
        'name' => 'string',
        'amount' => 'int',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
