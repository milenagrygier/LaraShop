<?php

declare(strict_types=1);

namespace Modules\Document\Repositories;

use Modules\Document\Repositories\Interfaces\DocumentTypeRepositoryInterface;
use Illuminate\Support\Collection;
use Modules\Document\Entities\DocumentType;

class DocumentTypeRepository implements DocumentTypeRepositoryInterface
{
    public function get(): Collection
    {
        return DocumentType::get();
    }

    public function create(array $data): DocumentType
    {
        return DocumentType::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return DocumentType::where('id', $id)->first()->update($data);
    }

    public function delete(int $id): bool
    {
        return DocumentType::where('id', $id)->first()->delete();
    }
}
