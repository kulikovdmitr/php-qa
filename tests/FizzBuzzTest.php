<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 10/11/2019
 * Time: 22:29
 */

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testOne()
    {
        require '../src/HomeWork1/FizzBuzz.php';
        $fizzbuzz = new FizzBuzz();
        self::assertEquals('fizz', $fizzbuzz->get(3));
    }

    public function testTwo()
    {
        $fizzbuzz = new FizzBuzz();
        self::assertEquals('buzz', $fizzbuzz->get(5));
    }

    public function testThree()
    {
        $fizzbuzz = new FizzBuzz();
        self::assertEquals('fizzbuzz', $fizzbuzz->get(15));
    }
    public function testFour()
    {
        $fizzbuzz = new FizzBuzz();
        self::assertEquals(2, $fizzbuzz->get(2));
    }

}
