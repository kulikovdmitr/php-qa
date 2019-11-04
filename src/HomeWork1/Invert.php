<?php
/**
 * Инверт
 * Куликов Дима
 */

class Invert
{
    public $var;

    public function solution($var = NULL)
    {
        if(isset($var)){
            echo $solution = strrev($var);
        } else {
            echo "Значение для переменной - не задано.";
        }
    }
}
$reverse = new Invert;
$reverse->solution('world'); // returns "dlrow"

