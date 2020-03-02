<?php

declare(strict_types=1);

namespace Modules\Promotion\Repositories;

use Modules\Promotion\Repositories\Interfaces\PromotionRepositoryInterface;
use Modules\Promotion\Entities\Promotion;
use Illuminate\Database\Eloquent\Builder;

class PromotionRepository implements PromotionRepositoryInterface
{
    public function getDataTableBuilder(): Builder
    {
        return Promotion::select('id', 'name', 'discount', 'valid_until', 'created_at', 'updated_at');
    }

    public function create(array $data): Promotion
    {
        return promotion::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return Promotion::where('id', $id)->first()->update($data);
    }

    public function delete(int $id): bool
    {
        return Promotion::where('id', $id)->first()->delete();
    }
}
