<?php

namespace Modules\Encrypter\Services\Encrypter;

class Encrypter
{
    public static function encrypt($value)
    {
        return encrypt($value);
    }
}