<?php

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Order\Entities\Status;

class Order extends Model
{
    protected $fillable = [
        'client_id',
        'status_id',
        'number',
        'value',
    ];

    public function status()
    {
        return $this->hasOne(Status::class);
    }
}
