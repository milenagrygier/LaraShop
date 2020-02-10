<?php

namespace Modules\Contact\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * @property int $id
 * @property int $type_id
 * @property string $subject
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $content
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class ContactForm extends Model
{
    protected $fillable = [
        'type_id',
        'subject',
        'name',
        'email',
        'phone',
        'content',
    ];

    public $casts = [
        'id' => 'int',
        'type_id' => 'int',
        'subject' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'content' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
