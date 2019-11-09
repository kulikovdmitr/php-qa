<?php
/**
 * Инверт
 * Куликов Дима
 */

class Invert
{
    public static $solution;
    public function solution($var = NULL)
    {
        if(isset($var)){
            echo self::$solution = strrev($var);
        } else {
            echo "Значение для переменной - не задано.";
        }
    }
}
