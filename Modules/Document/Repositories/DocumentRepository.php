<?php

declare(strict_types=1);

namespace Modules\Document\Repositories;

use Modules\Document\Repositories\Interfaces\DocumentRepositoryInterface;
use Illuminate\Support\Collection;
use Modules\Document\Entities\Document;

class DocumentRepository implements DocumentRepositoryInterface
{
    public function find(int $id):? Document
    {
        return Document::where('id', $id)->first();
    }

    public function create(array $data): Document
    {
        return Document::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return Document::where('id', $id)->first()->update($data);
    }

    public function delete(int $id): bool
    {
        return Document::where('id', $id)->first()->delete();
    }
}
