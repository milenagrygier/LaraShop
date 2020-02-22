<?php

declare(strict_types=1);

namespace Modules\Order\Repositories;

use Modules\Order\Repositories\Interfaces\PaymentRepositoryInterface;
use Modules\Order\Entities\Payment;

class PaymentRepository implements PaymentRepositoryInterface
{
    public function get(): Collection
    {
        return Payment::get();
    }

    public function create(array $data): Payment
    {
        return Payment::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return Payment::where('id', $id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Payment::where('id', $id)->delete();
    }

    public function attachOrder(int $payment_id, $order_id):? bool
    {
        return Payment::where('id', $payment_id)->first()->orders()->attach($order_id);
    }

    public function detachOrder(int $payment_id, $order_id):? int
    {
        return Payment::where('id', $payment_id)->first()->orders()->detach($order_id);
    }
}
