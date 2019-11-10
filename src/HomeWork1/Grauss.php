<?php

/**
 * Граусс
 * Куликов Дима
 */

class Grauss
{
    public $arr_sum,$stop;
    public function get()
    {
        $start = 0;
        if(isset($this->stop)){
            if(is_int($this->stop)){
                $this->arr_sum = array_sum(range($start,$this->stop));
                echo "Сумма последовательности числа равна " . $this->arr_sum;
            }else{
                echo "Введенное число - не является типом INT.";
            }
        }else{
            echo "Введенное число - не задано.";
        }
    }
}
