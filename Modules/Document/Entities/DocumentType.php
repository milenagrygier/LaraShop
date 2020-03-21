<?php

declare(strict_types=1);

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class DocumentType extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'id' => 'int',
        'name' => 'string'
    ];
}
