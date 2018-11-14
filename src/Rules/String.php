<?php

namespace Karamel\Validation\Rules;

use Karamel\Validation\Exceptions\ValidationException;

class String
{
    public function validate($data, $key, $value = null)
    {

        if (!isset($data[$key]))
            return;

        $_data = trim($data[$key]);

        if (!preg_match("/^[\w]+$/i", $_data))
            throw new ValidationException($key . " is not string");

    }
}