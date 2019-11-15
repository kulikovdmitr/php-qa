<?php

class Grauss
{
    public function get(int $number)
    {
        return array_sum(range(1,$number));
    }
}
