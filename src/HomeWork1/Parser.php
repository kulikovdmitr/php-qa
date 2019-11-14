<?php

class Parser
{
    public $string = 'Произвольная строка, которая иногда содержит +7(985)808-86-90 телефоны, а иногда <a href=\'https://example.com\'>ссылки</a>';
    public function getLinks()
    {
        $reg_url='/[www]{3}.{1}[.].[a-z]{1,}|[https]{4,}.{3}[a-z]{1,}.[a-z]{1,}/';

        preg_match($reg_url, $this->string,$matches_url, PREG_OFFSET_CAPTURE,0);

        echo "['". $matches_url[0][0] . "']"."\n";
    }

    public function getPhones()
    {
        $reg_phone = '/(?<phone>\W[0-9]{11,}|[0-9]{11,}|\W[7]{1}\W[0-9]{3}\W[0-9]{3}\W[0-9]{2}\W[0-9]{2}|[8]{1}\W[0-9]{3}\W[0-9]{3}\W[0-9]{2}\W[0-9]{2})/';

        preg_match($reg_phone, $this->string, $match_phone, PREG_OFFSET_CAPTURE, 0);

        echo "['". $match_phone['phone'][0] . "']";
    }
}
