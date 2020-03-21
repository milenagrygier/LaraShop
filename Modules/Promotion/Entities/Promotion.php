<?php

declare(strict_types=1);

namespace Modules\Promotion\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property int $discount
 * @property Carbon $valid_until
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Promotion extends Model
{
    protected $fillable = [
        'name',
        'discount',
        'valid_until'
    ];

    protected $casts = [
        'id' => 'int',
        'name' => 'string',
        'discount' => 'int',
        'valid_until' => 'dateteime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
