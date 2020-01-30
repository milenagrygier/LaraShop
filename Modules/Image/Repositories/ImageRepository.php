<?php

namespace Modules\Image\Repositories;

use Modules\Image\Entities\Image;
use Modules\Image\Repositories\Intefaces\ImageRepositoryInterface;

class ImageRepository implements ImageRepositoryInterface
{
    public function create(array $data): Image
    {
        return Image::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return Image::where('id', $id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Image::where('id', $id)->delete();
    }
}
