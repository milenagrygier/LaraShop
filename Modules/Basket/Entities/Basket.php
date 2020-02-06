<?php

declare(strict_types=1);

namespace Modules\Basket\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $client_id
 */
class Basket extends Model
{
    protected $fillable = [
        'client_id'
    ];
}
