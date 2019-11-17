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
        $result = new Brevity();
        self::assertEquals('Куликов Д.В.',$result->cut('Куликов Дмитрий Валериевич'));
    }

    public function testTwo()
    {
        $result = new Brevity();
        self::assertEquals('Kulikov D.V.',$result->cut('Kulikov Dmitrii Valerievich'));
    }

    public function testThree()
    {
        $result = new Brevity();
        self::assertEquals('Kulikov D.',$result->cut('Kulikov Dmitrii'));
    }
}
