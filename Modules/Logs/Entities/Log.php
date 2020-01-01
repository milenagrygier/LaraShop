<?php

namespace Modules\Logs\Entities;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
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
