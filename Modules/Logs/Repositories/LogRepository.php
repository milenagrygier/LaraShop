<?php

declare(strict_types=1);

namespace Modules\Logs\Repositories;

use Modules\Logs\Entities\Log;
use Modules\Logs\Repositories\Interfaces\LogRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;

class LogRepository implements LogRepositoryInterface
{
    public function find(int $id): ?Log
    {
        return Log::where('id', $id)->first();
    }

    public function getDataTableBuilder(): Builder
    {
        return Log::select('id', 'instance', 'level', 'level_name', 'message');
    }
}
