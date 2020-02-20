<?php

declare(strict_types=1);

namespace Modules\Basket\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Modules\Product\Entities\Product;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int',
        'client_id' => 'int',
        'updated_at' => 'datetime',
        'created_at' => 'datetime'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'basket_product');
    }
}
