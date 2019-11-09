<?php

use PHPUnit\Framework\TestCase;

class GraussTest extends TestCase
{
    public function testOne()
    {
        require  '../src/Homework1/Grauss.php';
        $grauss = new Grauss();
        $grauss->get('0',100);
        self::assertEquals('5050',Grauss::$arr_sum, 'Ожидаемый результат не равен действительному');
    }

    public function testTwo()
    {
        $grauss = new Grauss();
        $grauss->get('0',0);
        self::assertEquals('0',Grauss::$arr_sum, 'Ожидаемый результат не равен действительному');
    }

    public function testThree()
    {
        $grauss = new Grauss();
        $grauss->get('','');
        self::assertEquals('0',Grauss::$arr_sum, 'Ожидаемый результат не равен действительному');
    }
}
