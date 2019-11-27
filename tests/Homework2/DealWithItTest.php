<?php

use PHPUnit\Framework\TestCase;

class DealWithItTest extends TestCase
{
    public function testOneWithRegexp()
    {
        require "../../src/HomeWork2/DealWithIt.php";
        $result = new DealWithIt();
        self::assertEquals('name1 name2 ******** ******************',$result->findMatchesWithRegexp('name1 name2 yo@ya.ru dvkulikov@avito.ru'));
    }

    public function testOneWithoutRegexp()
    {
        $result = new DealWithIt();
        self::assertEquals('name1 name2 ******** ******************',$result->findMatchesWithoutRegexp('name1 name2 yo@ya.ru dvkulikov@avito.ru'));
    }

    public function testTwoWithoutRegexp()
    {
        $result = new DealWithIt();
        self::assertEquals('***********',$result->findMatchesWithoutRegexp('dk@avito.ru'));
    }

    public function testThreeWithoutRegexp()
    {
        $result = new DealWithIt();
        self::assertEquals('abcd',$result->findMatchesWithoutRegexp('abcd'));
    }

    public function testFourWithoutRegexp()
    {
        $result = new DealWithIt();
        self::assertEquals('',$result->findMatchesWithoutRegexp(''));
    }

    public function testFiveWithoutRegexp()
    {
        $result = new DealWithIt();
        self::assertEquals('@',$result->findMatchesWithoutRegexp('@'));
    }
}
