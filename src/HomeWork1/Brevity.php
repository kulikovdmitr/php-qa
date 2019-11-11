<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 10/11/2019
 * Time: 22:27
 */

class Brevity
{
    public $result,$error;
    public function cut($name)
    {
        $arr = explode(" ", $name);
        if(isset($arr[0], $arr[1], $arr[2])){
            $this->result = ($arr[0]. " ".mb_substr($arr[1],'0','1').'.' .mb_substr($arr[2],'0','1'));
        }else{
            $this->error = "Введенное значение - некорректно, заполните ФИО полностью.";
            echo $this->error;
        }
    }
}

//$result = new Brevity();
//$result->cut('kulikov dmitrii valerievich');
//echo $result->result;
