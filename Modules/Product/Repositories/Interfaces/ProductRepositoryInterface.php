<?php

namespace Modules\Product\Repositories\Interfaces;

use Modules\Product\Entities\Product;
use Illuminate\Database\Query\Builder;
use Illuminate\Pagination\AbstractPaginator;

interface ProductRepositoryInterface
{
    public function find(int $id): ?Product;

    public function paginated(int $per_page): AbstractPaginator;

    public function getDataTableBuilder(): Builder;

    public function create(array $data): Product;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
