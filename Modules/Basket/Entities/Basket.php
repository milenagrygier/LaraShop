<?php

declare(strict_types=1);

namespace Modules\Basket\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * @property int $id
 * @property int $client_id
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Basket extends Model
{
    protected $fillable = [
        'client_id'
    ];
}
