<?php

/**
 * Граусс
 * Куликов Дима
 */

class Grauss
{
    public static $arr_sum;
    public function get($start,$stop)
    {
        $arr = range($start,$stop);
        self::$arr_sum = array_sum($arr);
        echo "Сумма элементов числа равна " . self::$arr_sum;
    }
}
