<?php

declare(strict_types=1);

namespace Modules\Document\Repositories\Interfaces;

use Illuminate\Support\Collection;
use Modules\Document\Entities\DocumentType;

interface DocumentTypeRepositoryInterface
{
    public function get(): Collection;

    public function create(array $data): DocumentType;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
