<?php

use PHPUnit\Framework\TestCase;

class GraussTest extends TestCase
{
    public function testOne()
    {
        require  '../src/Homework1/Grauss.php';
        $grauss = new Grauss();
        self::assertEquals(5050,$grauss->get(100), 'Ожидаемый результат не равен действительному');
        unset($grauss->stop);
    }

    public function testTwo()
    {
        $grauss = new Grauss();
        self::assertEquals(55,$grauss->get(10), 'Ожидаемый результат не равен действительному');
        unset($grauss->stop);
    }

    public function testThree()
    {
        $grauss = new Grauss();
        self::assertEquals(NULL,$grauss->get(''), 'Ожидаемый результат не равен действительному');
        unset($grauss->stop);
    }

    public function testFour()
    {
        $grauss = new Grauss();
        self::assertEquals(NULL,$grauss->get('igiuui'), 'Ожидаемый результат не равен действительному');
        unset($grauss->stop);
    }
}
