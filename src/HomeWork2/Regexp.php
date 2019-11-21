<?php

class Regexp
{
    public function findMatches(string $string)
    {
        $reg_email='/[a-zA-z0-9]{1,64}@[a-zA-z0-9.]{1,255}/';
        preg_match_all($reg_email,$string,$matches);

        foreach ($matches as $value){
            foreach ($value as $values){
                $n = strlen($values);
                $string = preg_replace($reg_email, str_repeat("*", $n), $string);
                var_dump($string);
            };
        }
    }
}

$result = new Regexp();
$result->findMatches('weofijeio abcd@abcd.ru def@def.ru eowifj');
