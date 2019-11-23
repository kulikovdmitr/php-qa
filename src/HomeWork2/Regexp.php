<?php

class Regexp
{
    public function findMatchesWithRegexp(string $string)
    {
        $start = microtime(true);
        $reg_email='/[a-zA-z0-9]{1,64}@[a-zA-z0-9.]{1,255}/';
        preg_match_all($reg_email,$string,$matches);

        foreach ($matches as $value){
            foreach ($value as $values){
                $n = strlen($values);
                $string = preg_replace($reg_email, str_repeat("*", $n), $string);
                var_dump($string);
            };
        }
        $end = microtime(true);
    }

    public function findMatchesWithoutRegexp($string)
    {
        $start = microtime(true);

        $arr = explode(" ", $string);

        foreach ($arr as $value) {
            if (strstr($value, '@') == true) {
                $value = [$value, strlen($value)];
                $string = str_replace($value[0],str_repeat("*",intval($value[1])),$string);
            }
        }

        $end = microtime(true);
        echo "Время выполнения скрипта: ".($end - $start); //вывод результат
    }
}

$result = new Regexp();
$result->findMatchesWithRegexp('weofijeio abcd@abcd.ru def@def.ru eowifj');
$result->findMatchesWithoutRegexp('weofijeio abcd@abcd.ru def@def.ru eowifj');
