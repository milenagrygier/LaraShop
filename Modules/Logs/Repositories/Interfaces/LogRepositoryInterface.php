<?php

declare(strict_types=1);

namespace Modules\Logs\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Builder;
use Modules\Logs\Entities\Log;

interface LogRepositoryInterface
{
    public function find(int $id): ?Log;

    public function getDataTableBuilder(): Builder;
}
