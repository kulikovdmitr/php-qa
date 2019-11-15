<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 15/11/2019
 * Time: 11:00
 */

use PHPUnit\Framework\TestCase;

class GetSecondMaxTest extends TestCase
{
    public function testOne()
    {
        require '../src/HomeWork1/GetSecondMax.php';
        $getsecond = new GetSecondMax();
        self::assertEquals(4, $getsecond->GetSecond_First([3, 4, 2, 4, 5, 5]));
    }

    public function testTwo()
    {
        $getsecond = new GetSecondMax();
        self::assertEquals(8, $getsecond->GetSecond_First([9, 1, 0, 3, 3, 8]));
    }

    public function testThree()
    {
        $getsecond = new GetSecondMax();
        self::assertEquals(0, $getsecond->GetSecond_First([0,1]));
    }
}
