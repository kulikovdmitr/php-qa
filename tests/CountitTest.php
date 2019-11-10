<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 10/11/2019
 * Time: 21:53
 */

use PHPUnit\Framework\TestCase;

class CountitTest extends TestCase
{
    public function testOne()
    {
        require '../src/HomeWork1/CountIt.php';
        $counter = new Countit;
        $counter->Count(5,442158755745);
        self::assertEquals('4',CountIt::$result);
    }

    public function testTwo()
    {
        $counter = new Countit;
        $counter->Count('1','000001');
        self::assertEquals('1',CountIt::$result);
    }
}
