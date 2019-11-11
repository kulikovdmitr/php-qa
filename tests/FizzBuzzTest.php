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
        $fizzbuzz->get(1);
        self::assertEquals(1,$fizzbuzz->result);
    }

    public function testTwo()
    {
        $fizzbuzz = new FizzBuzz();
        $fizzbuzz->get(2);
        self::assertEquals(2,$fizzbuzz->result);
    }

    public function testThree()
    {
        $fizzbuzz = new FizzBuzz();
        $fizzbuzz->get(3);
        self::assertEquals('fizz',$fizzbuzz->result);
    }

    public function testFour()
    {
        $fizzbuzz = new FizzBuzz();
        $fizzbuzz->get(5);
        self::assertEquals('buzz',$fizzbuzz->result);
    }

    public function testFive()
    {
        $fizzbuzz = new FizzBuzz();
        $fizzbuzz->get(9);
        self::assertEquals('fizz',$fizzbuzz->result);
    }

    public function testSix()
    {
        $fizzbuzz = new FizzBuzz();
        $fizzbuzz->get(15);
        self::assertEquals('fizzbuzz',$fizzbuzz->result);
    }

    public function testSeven()
    {
        $fizzbuzz = new FizzBuzz();
        $fizzbuzz->get(0);
        self::assertEquals('0',$fizzbuzz->result);
    }
}
