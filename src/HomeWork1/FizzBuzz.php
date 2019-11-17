<?php

Class FizzBuzz
{
    private function isInvalid($i)
    {
        if($i < 0 ){
            throw new Exception('Введенное значение $i меньше 0',2);
        }

        if ($i == 0){
            throw new Exception('Введенное значение $i равно 0', 3);
        }
    }

    public function get(int $i)
    {
        $this->isInvalid($i);

        $result = false;

            if($i % 3 === 0){
                $result .= 'fizz';
            }

            if($i % 5 === 0){
                $result .= 'buzz';
            }

        return ($result) ? $result : $i;
    }
}
