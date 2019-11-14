<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 11/11/2019
 * Time: 20:40
 */

class GetSecondMax
{

    public function GetSecond()

    {
        $arr = [3, 4, 2, 4, 5, 5];

        $uniarr = array_unique($arr);
        //arsort($uni_arr);
        //$max_value = array_pop($uni_arr);
        //$result = array_pop($uni_arr);
        //var_dump($uniarr);
        print_r($uniarr);
    }
}

$result = new GetSecondMax();
$result->GetSecond();
