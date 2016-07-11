<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php

/**
 * Created by PhpStorm.
 * User: ramil
 * Date: 7/10/16
 * Time: 11:17 AM
 */


if ( ! function_exists('get_age'))
{
    function get_age($birth_date = '')
    {

        $birthdate = new DateTime($birth_date);
        $today   = new DateTime('today');
        $age = $birthdate->diff($today)->y;

        return $age;

    }
}