<?php

use PHPUnit\Framework\TestCase;

class InvertTest extends TestCase
{

    public function testOne()
    {
        require  '../src/Homework1/Invert.php';
        $invert = new Invert();
        $invert->solution('world');
        self::assertEquals('dlrow',Invert::$solution, 'Ожидаемый результат не равен действительному');
    }

    public function testTwo()
    {
        $invert1 = new Invert();
        $invert1->solution("123");
        self::assertEquals('321',Invert::$solution, 'Ожидаемый результат не равен действительному');
    }

    public function testThree()
    {
        $invert2 = new Invert();
        $invert2->solution('1-');
        self::assertEquals('-1',Invert::$solution, 'Ожидаемый результат не равен действительному');
    }

    public function testFour()
    {
        $invert3 = new Invert();
        $invert3->solution('==!');
        self::assertEquals('!==',Invert::$solution, 'Ожидаемый результат не равен действительному');
    }
}
