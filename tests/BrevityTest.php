<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 10/11/2019
 * Time: 22:27
 */
use PHPUnit\Framework\TestCase;

class BrevityTest extends TestCase
{
    public function testOne()
    {
        require '../src/Homework1/Brevity.php';
        $brevity = new Brevity();
        $brevity->cut('Куликов Дмитрий Валериевич');
        self::assertEquals('Куликов Д.В',$brevity->result);
    }

    public function testTwo()
    {
        $brevity = new Brevity();
        $brevity->cut('Kulikov Dmitrii Valerievich');
        self::assertEquals('Kulikov D.V',$brevity->result);
    }

    public function testThree()
    {
        $brevity = new Brevity();
        $brevity->cut('Kulikov D V');
        self::assertEquals('Kulikov D.V',$brevity->result);
    }

    public function testFour()
    {
        $brevity = new Brevity();
        $brevity->cut('Kulikov');
        self::assertEquals('Введенное значение - некорректно, заполните ФИО полностью.',$brevity->error);
    }
}
