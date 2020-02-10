<?php

namespace Modules\Contact\Entities;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @property int $client_id
 * @property int $contact_form_id
 */

class ContactClient extends Pivot
{
    protected $fillable = [
        'client_id',
        'contact_form_id'
    ];

    public $casts = [
        'client_id' => 'int',
        'contact_form_id' => 'int'
    ];
}
