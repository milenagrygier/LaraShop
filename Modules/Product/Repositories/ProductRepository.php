<?php

namespace Modules\Product\Repositories;

use Modules\Product\Repositories\Interfaces\ProductRepositoryInterface;
use Modules\Product\Entities\Product;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Database\Query\Builder;
use DB;

class ProductRepository implements ProductRepositoryInterface
{
    public function find(int $id): ?Product
    {
        return Product::find($id);
    }

    public function all(int $per_page): AbstractPaginator
    {
        return Product::paginate($per_page);
    }

    public function getDataTableBuilder(): Builder
    {
        return DB::table('product')
        ->join('prices', 'prices.product_id', '=', 'product.id')
        ->select('product.id', 'product.name', 'product.created_at', 'product.updated_at',
        'prices.name as price', 'prices.amount');
    }

    public function create(array $data): Product
    {
        return Product::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return $this->find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return $this->find($id)->delete($id);
    }
}
