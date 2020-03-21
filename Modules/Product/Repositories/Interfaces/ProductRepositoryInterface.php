<?php

declare(strict_types=1);

namespace Modules\Product\Repositories\Interfaces;

use Modules\Product\Entities\Product;
use Illuminate\Database\Query\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ProductRepositoryInterface
{
    public function find(int $id): ?Product;

    public function paginated(int $per_page): LengthAwarePaginator;

    public function getDataTableBuilder(): Builder;

    public function create(array $data): Product;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;

    public function attachImage(int $product_id, int $image_id):? bool;

    public function detachImage(int $product_id, int $image_id):? int;
}
