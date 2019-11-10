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
}