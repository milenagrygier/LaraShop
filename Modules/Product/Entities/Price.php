<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'amount'
    ];
}
