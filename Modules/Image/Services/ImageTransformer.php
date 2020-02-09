<?php

namespace Modules\Image\Services;

use Intervention\Image\Facades\Image;

class ImageTransformer
{
    protected $image;

    public function make(string $url)
    {
        $this->image = Image::make($url);
        return $this->image;
    }

    public function resize(int $width, int $height): Image
    {
        $this->image->resize($width, $height, function ($balance) {
            $balance->aspectRatio();
        });

        return $this->image;
    }
}
