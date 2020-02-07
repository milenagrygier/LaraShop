<?php

declare(strict_types=1);

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Order\Entities\Status;
use Carbon\Carbon;

/**
 * @property int $id
 * @property int $client_id
 * @property int $status_id
 * @property int $number
 * @property float $value
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

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
