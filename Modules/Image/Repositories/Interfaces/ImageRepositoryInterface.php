<?php

declare(strict_types=1);

namespace Modules\Image\Repositories\Intefaces;

use Modules\Image\Entities\Image;

interface ImageRepositoryInterface
{
    public function create(array $data): Image;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
