<?php

declare(strict_types=1);

namespace Modules\Promotion\Repositories\Interfaces;

use Modules\Promotion\Entities\Promotion;
use Illuminate\Database\Eloquent\Builder;

interface PromotionRepositoryInterface
{
    public function getDataTableBuilder(): Builder;

    public function create(array $data): Promotion;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
