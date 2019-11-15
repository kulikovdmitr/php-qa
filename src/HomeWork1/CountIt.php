<?php

class CountIt
{
    public function count(int $number, int $value)
    {
        return substr_count($value,$number);
    }
}
