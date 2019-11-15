<?php

class Brevity
{
    public function cut($name)
    {
        $arr = explode(" ", $name);
        $k = count($arr);
        for ($i = 1; $i < $k; $i++) {
            $result[$i] = mb_substr($arr[$i], 0, 1) . ".";

        }
        echo $arr[0] . " " . implode($result);
    }
}
