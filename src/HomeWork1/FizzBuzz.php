<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 10/11/2019
 * Time: 22:28
 */

Class FizzBuzz
{
    public function get (int $i)
    {
        $mod3 = $i % 3;
        $mod5 = $i % 5;
        if ($mod3 == 0 and $mod5 !== 0){
            return "Fizz";
        }
        if ($mod5 == 0 and $mod3 !== 0) {
            return "Buzz";
        }
        if ($mod3 && $mod5 == 0){
            return "FizzBuzz";
        }
        if ($mod5 && $mod3 == 0){
            return "FizzBuzz";
        }
    }
}
