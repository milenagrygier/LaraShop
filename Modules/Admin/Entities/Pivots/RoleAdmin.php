<?php

declare(strict_types=1);

namespace Modules\Admin\Entities\Pivots;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @property int $admin_id
 * @property int $role_id
 */
class RoleAdmin extends Pivot
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_id',
        'role_id'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = true;
}
