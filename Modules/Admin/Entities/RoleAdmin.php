<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class RoleAdmin extends Model
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
}
