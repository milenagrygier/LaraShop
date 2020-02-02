<?php

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = false;

    protected $table = 'statuses';

    protected $fillable = [
        'name'
    ];

}
