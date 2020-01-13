<?php

namespace Modules\Encrypter\Traits;

use Modules\Encrypter\Services\Decrypter;
use Modules\Encrypter\Services\Encrypter;

trait HasEncryptedAttributes
{
    public function getAttribute($key)
    {
      $value = parent::getAttribute($key);
      if (in_array($key, $this->encrypted) && isset($value))
      {
          $value = Decrypter::decrypt($value);
      }
      return $value;
    }

    public function setAttribute($key, $value)
    {
      if (in_array($key, $this->encrypted))
      {
          $value = Encrypter::encrypt($value);
      }
      return parent::setAttribute($key, $value);
    }
}