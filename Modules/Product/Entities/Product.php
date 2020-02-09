<?php

declare(strict_types=1);

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Pivots\ProductImage;
use Modules\Image\Entities\Image;
use Modules\Product\Entities\Price;
use Carbon\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property int $VAT
 * @property string $unit
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Product extends Model
{
    protected $fillable = [
        'name',
        'VAT',
        'unit',
        'description'
    ];

    public function images()
    {
        return $this->hasMany(Image::class)->using(ProductImage::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
