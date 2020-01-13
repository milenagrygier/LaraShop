<?php 

namespace Modules\Encrypter\Services;

class Decrypter
{
    public static function decrypt($value)
    {
        return decrypt($value);
    }
}