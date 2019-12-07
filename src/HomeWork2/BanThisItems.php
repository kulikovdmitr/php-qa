<?php

class BanThisItems
{
    public function banThisItemOne(array $array)
    {
        $countOfValues = array_count_values($array);

        foreach ($countOfValues as $key => $value) {
            if($value <= 1){
                unset($array[array_search($key,$array)]);
            }
        }
        return $array;
    }

    public function banThisItemTwo(array $array)
    {
        $arrayUnique = array_unique($array); //вычислили дубли

        $arrayDiff = array_diff_key($array,$arrayUnique);//получили разницу массивов

        $intersection = array_intersect($arrayDiff,$arrayUnique); //нашли элемент(ы) которые присутствуют в обоих массивах

        foreach ($intersection as $value){ //удаляем лишние элементы
            if (in_array($value,$arrayUnique)){
                unset($arrayUnique[array_search($value,$arrayUnique)]);
            }
        }
        $result = array_diff($array,$arrayUnique);//вычисляем разницу

        return $result;
    }
}
//
//$result = new BanThisItems();
//var_dump($result->banThisItemOne([1,2,3,4]));
