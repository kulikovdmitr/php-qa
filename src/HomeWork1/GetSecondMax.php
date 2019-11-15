<?php

class GetSecondMax
{
    public function getSecond(array $arr)
    {
        $a = array_unique($arr);
        sort($a);
        array_pop($a);
        return  max($a);
    }
}
