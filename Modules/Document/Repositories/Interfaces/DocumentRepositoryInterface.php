<?php

declare(strict_types=1);

namespace Modules\Document\Repositories\Interfaces;

use Modules\Document\Entities\Document;

interface DocumentRepositoryInterface
{
    public function find(int $id):? Document;

    public function create(array $data): Document;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
