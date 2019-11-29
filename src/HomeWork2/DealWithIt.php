<?php
class DealWithIt
{
    public function findMatchesWithRegexp(string $string):string
    {
        $start = microtime(true);
        $reg_email='/[a-zA-z0-9]{1,64}@[a-zA-z0-9.]{1,255}/';
        preg_match_all($reg_email,$string,$arr);
        foreach ($arr as $value){
            foreach ($value as $val){
                $val_arr = [$val, strlen($val)];
                $string = str_replace($val_arr[0],str_repeat("*",intval($val_arr[1])),$string);
            }
        }
        $end = microtime(true);
        echo "Время выполнения скрипта: ".($end - $start);
        return $string;
    }
    public function findMatchesWithoutRegexp(string $string)
    {
        $start = microtime(true);
        $arr = explode(" ", $string);
        foreach ($arr as $value) {
            if (strstr($value, '@') != true) {
                continue;
            }
            $firstToken = strtok($value,'@');
            $secondToken = strtok('@');
            if($firstToken == null || $secondToken == null){
                continue;
            }
            $value = [$value, strlen($value)];
            $string = str_replace($value[0],str_repeat("*",intval($value[1])),$string);
        }
        $end = microtime(true);
        echo "Время выполнения скрипта: ".($end - $start);
        return $string;
    }
}
