<?php
use PHPUnit\Framework\TestCase;
class FindLongestTest extends TestCase
{
    public function testOneFindLongest()
    {
        require "../../src/HomeWork2/FindLongest.php";
        $result = new FindLongest();
        self::assertEquals('1234567 1234567',$result->findLongester('1234567 1234567 123456'));
    }

    public function testSecondLongest()
    {
        $result = new FindLongest();
        self::assertEquals('123456',$result->findLongester('123456'));
    }
}