<?php

declare(strict_types=1);

namespace Modules\Promotion\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * @property int $id
 * @property string $code
 * @property Carbon $valid_until
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Code extends Model
{
    protected $fillable = [
        'code',
        'valid_until'
    ];

    protected $casts = [
        'id' => 'int',
        'code' => 'string',
        'valid_until' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
