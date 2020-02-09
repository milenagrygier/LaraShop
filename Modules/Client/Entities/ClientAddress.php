<?php

declare(strict_types=1);

namespace Modules\Client\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $client_id
 * @property string $street
 * @property string $city
 * @property string $zip_code
 * @property string $country
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

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
