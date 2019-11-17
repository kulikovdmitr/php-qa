<?php

use PHPUnit\Framework\TestCase;

class ParserTest extends  TestCase
{
    public function testLinksOne()
    {
        require '../src/HomeWork1/Parser.php';
        $parser = new Parser();
        self::assertEquals("['https://yandex.ru']", $parser->getLinks('text https://yandex.ru ef'));
    }

    public function testLinksTwo()
    {
        $parser = new Parser();
        self::assertEquals("['http://yandex.ru']",$parser->getLinks('http://yandex.ru text'));
    }

    public function testLinksThree()
    {
        $parser = new Parser();
        self::assertEquals("['http://www.avito.ru']",$parser->getLinks('http://www.avito.ru text'));
    }

    public function testLinksFour()
    {
        $parser = new Parser();
        self::assertEquals("['www.avito.ru']",$parser->getLinks('www.avito.ru text'));
    }

    public function testPhoneOne()
    {
        $parser = new Parser();
        self::assertEquals("['+7(985)808-86-90']", $parser->getPhones('Произвольная строка, которая иногда содержит +7(985)808-86-90 телефоны, а иногда <a href=\'https://example.com\'>ссылки</a>'));
    }

    public function testPhoneTwo()
    {
        $parser = new Parser();
        self::assertEquals("['+79032899928']", $parser->getPhones('+79032899928 1238479 fhgjhwerf'));
    }

    public function testPhoneThree()
    {
        $parser = new Parser();
        self::assertEquals("['89032899928']", $parser->getPhones('89032899928 1238479 fhgjhwerf'));
    }
}
