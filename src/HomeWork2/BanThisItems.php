<?php

class BanThisItems
{
    public  function banThisItem(array $array)
    {
            $result = array_diff_key($array,array_unique($array));
       var_dump($result);
    }
}

$result = new BanThisItems();
$result->banThisItem([123,123,456]);