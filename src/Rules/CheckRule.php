<?php

namespace Karamel\Validation\Rules;

class CheckRule
{
    public static function check($name, $data, $key, $value)
    {
        $name = ucfirst($name);
        (new $name())->validate($data, $key, $value);
    }
}