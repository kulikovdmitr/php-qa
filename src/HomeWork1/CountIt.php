<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 10/11/2019
 * Time: 21:29
 */

class CountIt
{
    public static $result;
    public function Count($number,$value)
    {
        self::$result =  substr_count($value,$number);
        echo self::$result;
    }
}
