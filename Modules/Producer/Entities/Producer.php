<?php

declare(strict_types=1);

namespace Modules\Producer\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Modules\Product\Entities\Product;

/**
 * @property int $id
 * @property string $name
 * @property string $web
 * @property string $nip
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Producer extends Model
{
    protected $fillable = [
        'name',
        'web',
        'nip'
    ];

    protected $casts = [
        'id' => 'int',
        'name' => 'string',
        'nip' => 'string',
        'datetime' => 'created_at',
        'datetime' => 'updated_at',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'producer_product');
    }
}
