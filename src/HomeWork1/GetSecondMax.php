<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 11/11/2019
 * Time: 20:40
 */

class GetSecondMax
{
    public function GetSecond_First(array $arr)
    {
        $a = array_unique($arr);
        sort($a);
        array_pop($a);
        return  max($a);
    }
}

$result = new GetSecondMax();
$result->GetSecond_First([9,2,2,3,4,5]);
