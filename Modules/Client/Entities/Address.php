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
class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'client_id',
        'street',
        'city',
        'zip_code',
        'country',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int',
        'client_id' => 'int',
        'street' => 'string',
        'city' => 'string',
        'zip_code' => 'string',
        'country' => 'string',
        'created_at'  => 'datetime',
        'updated_at'  => 'datetime',
    ];
}
