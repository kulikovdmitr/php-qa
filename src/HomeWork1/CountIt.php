<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 10/11/2019
 * Time: 21:29
 */

class CountIt
{
    public function Count(int $number, int $value)
    {
        return substr_count($value,$number);
    }
}