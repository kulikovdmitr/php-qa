<?php

class FindLongest
{
    public function findLongester($string)
    {
        $arr = explode(' ',$string);
        //var_dump($arr);
        usort($arr,'mysort');
    }

    function mysort($a,$b){
        return $a['0'] <=> $b['0'];
    }
}

$result = new FindLongest();
$result->findLongester('wefeirogh erwiogjweiorg ewrijgweoirgjrif');
