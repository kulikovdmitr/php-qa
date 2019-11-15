<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 14/11/2019
 * Time: 21:31
 */

use PHPUnit\Framework\TestCase;

class ParserTest extends  TestCase
{
    public function testOne()
    {
        require '../src/HomeWork1/Parser.php';
        $parser = new Parser();
        $parser->string = '89032899928';
        $parser->getLinks();
        self::assertEquals(89032899928,$parser->result);
    }
}
