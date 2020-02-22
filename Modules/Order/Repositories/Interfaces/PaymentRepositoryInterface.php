<?php

declare(strict_types=1);

namespace Modules\Order\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Modules\Order\Entities\Payment;

interface PaymentRepositoryInterface
{
    public function get(): Collection;

    public function create(array $data): Payment;

    public function update(int $payment_id, array $data): bool;

    public function delete(int $id): bool;

    public function attachOrder(int $payment_id, $order_id):? bool;

    public function detachOrder(int $payment_id, $order_id):? int;
}
