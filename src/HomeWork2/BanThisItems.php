<?php

class BanThisItems
{
    public  function banThisItem(array $array)
    {
       $result = array_diff_key($array,array_unique($array));
       return $result;
    }
}

