<?php

class FindLongest
{
    public function findLongester($string)
    {
        function mysort($a,$b) {
            if (strlen($a) == strlen($b)) {
                return 0;
            }
            return (strlen($a) > strlen($b)) ? -1 : 1;
        }

        $arr = explode(' ',$string);

        usort($arr,'mysort');

        $firstMaxValue = array_shift($arr); //извлекли первое значение(максимальное)

        foreach ($arr as $item) {
            if (strlen($item) !== strlen($firstMaxValue)) {
                continue;
            }else{
                $result = $firstMaxValue . " " . array_shift($arr);
                return $result;
            }
        } return $firstMaxValue;
    }
}
