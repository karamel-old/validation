<?php

namespace Karamel\Validation\Rules;

use Karamel\Validation\Exceptions\ValidationException;

class Confirmed
{
    /**
     * @param $data
     * @param $key
     * @param null $value
     * @throws ValidationException
     */
    public function validate($data, $key, $value = null)
    {

        if (!isset($data[$key]))
            throw new ValidationException($key . " not found");

        if (!isset($data[$key . '_confirmation']))
            throw new ValidationException($key . " confirm not found");

        $_data = trim($data[$key]);
        $_confirm = trim($data[$key . '_confirmation']);

        if ($_confirm != $_data)
            throw new ValidationException($key . " must be an equal his confirmation ");


    }
}