<?php

declare(strict_types=1);

namespace Modules\Producer\Repositories\Interfaces;

use Modules\Producer\Entities\Producer;
use Illuminate\Support\Collection;

interface ProducerRepositoryInterface
{
    public function find(int $id): Producer;

    public function get(int $id): Collection;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;

    public function attachProduct(int $producer_id, int $product_id):? bool;

    public function detachProduct(int $producer_id, int $product_id):? int;
}
