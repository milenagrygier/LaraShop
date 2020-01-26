<?php

namespace Modules\Client\Entities;

use Illuminate\Database\Eloquent\Model;

class ClientAddress extends Model
{
    protected $fillable = [
        'client_id',
        'street',
        'city',
        'zip_code',
        'country', 
    ];
}
