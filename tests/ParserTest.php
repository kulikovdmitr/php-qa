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
}
