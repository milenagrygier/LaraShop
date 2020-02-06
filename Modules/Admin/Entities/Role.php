<?php

declare(strict_types=1);

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property int $level
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'level'
    ];
}
