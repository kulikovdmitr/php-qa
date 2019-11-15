<?php

Class FizzBuzz
{
    public function get(int $i)
    {
        $mod3 = $i % 3;
        $mod5 = $i % 5;
        $mod35 = $i % 15;

        if  ($i > 0 and $mod3 == 0 and $mod5 !== 0){

            $this->result = "fizz";

        } elseif($i > 0 and $mod5 == 0 and $mod3 !== 0) {

            $this->result = "buzz";
        } elseif ($i > 0 and $mod35 == 0){
            $this->result = "fizzbuzz";
        } else {
            $this->result = $i;
        }
    }
}
