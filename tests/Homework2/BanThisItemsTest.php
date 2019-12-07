<?php
use PHPUnit\Framework\TestCase;
class BanThisItemsTest extends TestCase
{
    public function testOneBanThisItems()
    {
        require '../../src/HomeWork2/BanThisItems.php';
        $result = new BanThisItems;
        self::assertEquals([],$result->banThisItemOne([1,2,3,4,5,6]));
    }

    public function testTwoBanThisItems()
    {
        $result = new BanThisItems;
        self::assertEquals([2,2,3,3],$result->banThisItemOne([2,2,3,3,9,7]));
    }
}