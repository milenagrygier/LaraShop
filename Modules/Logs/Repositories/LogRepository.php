<?php

namespace Modules\Logs\Repositories;

use Modules\Logs\Entities\Log;
use Modules\Logs\Repositories\Interfaces\LogRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;

class LogRepository implements LogRepositoryInterface
{
    public function find(int $id)
    {
        return Log::find($id);
    }

    public function getDataTableBuilder(): Builder
    {
        return Log::select('id', 'instance', 'level', 'level_name', 'message');
    }
}