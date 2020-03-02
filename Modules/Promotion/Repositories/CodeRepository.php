<?php

declare(strict_types=1);

namespace Modules\Promotion\Repositories;

use Modules\Promotion\Entities\Code;
use Modules\Promotion\Repositories\Interfaces\CodeRepositoryInterface;

class CodeRepository implements CodeRepositoryInterface
{
    public function create(array $data): Code
    {
        return Code::create($data);
    }

    public function delete(int $id): bool
    {
        return Code::where('id', $id)->first()->delete();
    }
}
