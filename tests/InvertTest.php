<?php

use PHPUnit\Framework\TestCase;

class InvertTest extends TestCase
{
    public function testOne()
    {
        require  '../src/Homework1/Invert.php';
        $invert = new Invert();
        self::assertEquals('dlrow',$invert->solution('world'), 'Ожидаемый результат не равен действительному');
    }

    public function testTwo()
    {
        $invert = new Invert();
        self::assertEquals(321,$invert->solution(123), 'Ожидаемый результат не равен действительному');
    }

    public function testThree()
    {
        $invert = new Invert();
        self::assertEquals('-1',$invert->solution('1-'), 'Ожидаемый результат не равен действительному');
    }

    public function testFour()
    {
        $invert = new Invert();
        self::assertEquals('!==',$invert->solution('==!'), 'Ожидаемый результат не равен действительному');
    }
}
