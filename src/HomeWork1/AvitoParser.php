<?php

class AvitoParser

{
    public function parser()
    {
        $string = "Произвольная строка, которая иногда содержит 8(903)289-99-28 телефоны, а иногда <a href='https://example.com'>ссылки</a>";

        $reg_phone = '/(?<phone>\W[0-9]{11,}|[0-9]{11,}|\W[7]{1}\W[0-9]{3}\W[0-9]{3}\W[0-9]{2}\W[0-9]{2}|[8]{1}\W[0-9]{3}\W[0-9]{3}\W[0-9]{2}\W[0-9]{2})/';
        $reg_url='/[www]{3}.{1}[.].[a-z]{1,}|[https]{4,}.{3}[a-z]{1,}.[a-z]{1,}/';
        preg_match($reg_phone, $string, $match_phone, PREG_OFFSET_CAPTURE, 0);
        preg_match($reg_url, $string,$matches_url, PREG_OFFSET_CAPTURE,0);

        print_r($match_phone['phone'][0]);
        //var_dump($matches_url);

    }
}
$arr = new AvitoParser();
$arr->parser();
