<?php

namespace Karamel\Validation;

use Karamel\Validation\Rules\CheckRule;

class Validation
{

    public static function make($data = [], $roles = [])
    {
        foreach ($roles as $key => $role) {

            $role_row = explode('|', $role);

            foreach ($role_row as $role_single) {
                $role_single = explode(":", $role_single);
                if (count($role_single) > 1) {
                    $_role_name = $role_single[0];
                    $_role_value = $role_single[1];
                } else {
                    $_role_name = $role_single[0];
                    $_role_value = null;
                }
                CheckRule::check($_role_name, $data, $key, $_role_value);
            }
        }
    }

}