<?php

declare(strict_types=1);

namespace Modules\Promotion\Repositories\Interfaces;

use Modules\Promotion\Entities\Code;

interface CodeRepositoryInterface
{
    public function create(array $data): Code;

    public function delete(int $id): bool;
}
