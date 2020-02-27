<?php

declare(strict_types=1);

namespace Modules\Contact\Repositories\Interfaces;

use Modules\Contact\Entities\Type;
use Illuminate\Support\Collection;

interface TypeRepositoryInterface
{
    public function get(): Collection;

    public function create(array $data): Type;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
