<?php

namespace Modules\Logs\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasEncryptableAttributes;

class Log extends Model
{
    use HasEncryptableAttributes;

    protected $encryptable = [
        'file',
        'exception_class',
        'context'
    ];

    protected $fillable = [
        'instance',
        'channel',
        'file',
        'line',
        'exception_class',
        'ip',
        'user_agent',
        'level',
        'level_name',
        'message',
        'context',
    ];
}
