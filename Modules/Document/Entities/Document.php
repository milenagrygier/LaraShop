<?php

declare(strict_types=1);

namespace Modules\Document\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Modules\Document\Entities\DocumentType;

/**
 * @property int $id
 * @property int $type_id
 * @property string $name
 * @property string $path
 * @property string $extension
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Document extends Model
{
    protected $fillable = [
        'type_id',
        'name',
        'path',
        'extension'
    ];

    protected $casts = [
        'id' => 'int',
        'type_id' => 'int',
        'name' => 'string',
        'path' => 'string',
        'extension' => 'string'
    ];

    public function type()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
