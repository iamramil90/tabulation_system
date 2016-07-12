<?php
/**
 * Created by PhpStorm.
 * User: rgonzales
 * Date: 7/12/2016
 * Time: 12:55 PM
 */

function fix_string($word){

    $noise = array('.','-',' ','_');

    $word = strtolower($word);
    $word = str_replace($noise,'',$word);

    return $word;
}

function status_text($var){

    $arr[1] = 'Yes';
    $arr[0] = 'No';

    return $arr[$var];
}