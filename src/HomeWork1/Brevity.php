<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 10/11/2019
 * Time: 22:27
 */

class Brevity
{
    public function cut()
    {
        header('Content-Type: text/html; charset=UTF-8');
        $name = 'Kulikov Dmitrii';
        $a = preg_split("^/[A-Z][a-z][A-Za-z]*$/",$name);
//        $result = mb_strcut($name,'1','10','UTF-8');
//        echo $result;
        var_dump($a);
    }

}

$result = new Brevity();
$result->cut();
