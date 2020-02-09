<?php

declare(strict_types=1);

namespace Modules\Logs\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasEncryptableAttributes;
use Carbon\Carbon;

/**
 * @property int $id
 * @property string $instance
 * @property string $channel
 * @property string $file
 * @property int $line
 * @property string $exception_class
 * @property string $ip
 * @property string $user_agent
 * @property int $level
 * @property string $level_name
 * @property string $message
 * @property string $context
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

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


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int',
        'instance' => 'string',
        'channel' => 'string',
        'file' => 'string',
        'line' => 'int',
        'exception_class' => 'string',
        'ip' => 'string',
        'user_agent' => 'string',
        'level' => 'int',
        'level_name' => 'string',
        'message' => 'string',
        'context' => 'string',
        'created_at'  => 'datetime',
        'updated_at'  => 'datetime',
    ];
}
