<?php

use PHPUnit\Framework\TestCase;

class GraussTest extends TestCase
{
    public function testOne()
    {
        require  '../src/Homework1/Grauss.php';
        $grauss = new Grauss();
        $grauss->stop = 100;
        $grauss->get();
        self::assertEquals(5050,$grauss->arr_sum, 'Ожидаемый результат не равен действительному');
        unset($grauss->stop);
    }

    public function testTwo()
    {
        $grauss = new Grauss();
        $grauss->stop = 10;
        $grauss->get();
        self::assertEquals(55,$grauss->arr_sum, 'Ожидаемый результат не равен действительному');
        unset($grauss->stop);
    }

    public function testThree()
    {
        $grauss = new Grauss();
        $grauss->get();
        self::assertEquals(NULL,$grauss->arr_sum, 'Ожидаемый результат не равен действительному');
        unset($grauss->stop);
    }

    public function testFour()
    {
        $grauss = new Grauss();
        $grauss->stop = 'asdf';
        $grauss->get();
        self::assertEquals(NULL,$grauss->arr_sum, 'Ожидаемый результат не равен действительному');
        unset($grauss->stop);
    }
}
