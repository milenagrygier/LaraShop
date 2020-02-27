<?php

namespace Modules\Contact\Repositories;

use Modules\Contact\Repositories\Interfaces\TypeRepositoryInterface;
use Modules\Contact\Entities\Type;
use Illuminate\Support\Collection;

class TypeRepository implements TypeRepositoryInterface
{
    public function get(): Collection
    {
        return Type::get();
    }

    public function create(array $data): Type
    {
        return Type::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return Type::where('id', $id)->first()->update($data);
    }

    public function delete(int $id): bool
    {
        return Type::where('id', $id)->first()->delete();
    }
}
