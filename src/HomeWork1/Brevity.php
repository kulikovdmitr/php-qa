<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 10/11/2019
 * Time: 22:27
 */

class Brevity
{
    public $result;
    public function cut($name)
    {
        $arr = explode(" ", $name);
        $this->result = ($arr[0]. " ".mb_substr($arr[1],'0','1').'.' .mb_substr($arr[2],'0','1'));
    }
}
