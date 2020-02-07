<?php

declare(strict_types=1)

namespace Modules\Image\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * @property int $id
 * @property string $path
 * @property string $thumbnail_path
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Image extends Model
{
    protected $fillable = [
        'path',
        'thumbnail_path'
    ];
}
