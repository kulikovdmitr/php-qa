<?php

class BanThisItems
{
    public function banThisItemOne(array $array)
    {
        $countOfValues = array_count_values($array);

        foreach ($countOfValues as $key => $value) {
            if ($value <= 1) {
                unset($array[array_search($key, $array)]);
            }
        }
        return $array;
    }
}
