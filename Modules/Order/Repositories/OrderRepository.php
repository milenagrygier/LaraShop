<?php

declare(strict_types=1);

namespace Modules\Order\Repositories;

use Modules\Order\Repositories\Interfaces\OrderRepositoryInterface;
use Modules\Order\Entities\Order;
use Illuminate\Support\Collection;
use DB;
use Illuminate\Database\Schema\Builder;

class OrderRepository implements OrderRepositoryInterface
{
    public function find(int $id): ?Order
    {
        return Order::with('status')->where('id', $id)->first();
    }

    public function findByClient(int $client_id): Collection
    {
        return Order::with('status')->where('client_id', $client_id)->get();
    }

    public function getDataTableBuilder(): Builder
    {
        return DB::table('orders')
        ->join('clients', 'clients.id', '=', 'orders.client_id')
        ->join('statuses', 'status.id', '=', 'orders.status_id')
        ->select('orders.id', 'clients.email', 'clients.username',
        'statuses.name', 'orders.number', 'orders.value',
        'orders.created_at', 'orders.updated_at');
    }

    public function create(array $data): Order
    {
        return Order::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return Order::where('id', $id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Order::where('id', $id)->delete();
    }

    public function attachProduct(int $order_id, int $product_id):? bool
    {
        return Order::where('id', $order_id)->first()->products()->attach($product_id);
    }

    public function detachProduct(int $order_id, int $product_id):? int
    {
        return Order::where('id', $order_id)->first()->products()->detach($product_id);
    }
}
