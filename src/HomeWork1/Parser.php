<?php

class Parser
{
    public function getLinks($string)
    {
        $reg_url='/[ht|ftps?]{3,}[^\s]+|[www]{3}[^\s]+/';

        preg_match($reg_url, $string,$matches_url);

        return "['". $matches_url[0] . "']";
    }

    public function getPhones($string2)
    {
        $reg_phone = '/(?<phone>\W[0-9]{11,}|[0-9]{11,}|\W[7]{1}\W[0-9]{3}\W[0-9]{3}\W[0-9]{2}\W[0-9]{2}|[8]{1}\W[0-9]{3}\W[0-9]{3}\W[0-9]{2}\W[0-9]{2})/';

        preg_match($reg_phone, $string2, $match_phone);

        return "['".$match_phone['phone'] . "']";
    }
}
