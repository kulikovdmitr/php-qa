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

    public function testThreeBanThisItems()
    {
        $result = new BanThisItems;
        self::assertEquals([1,2,2,1],$result->banThisItemOne([8,1,2,2,1,3,9,7]));
    }

    public function testOneBanThisItemsTwo()
    {
        $result = new BanThisItems;
        self::assertEquals([],$result->banThisItemTwo([1,2,3,4,5,6]));
    }

    public function testTwoBanThisItemsTwo()
    {
        $result = new BanThisItems;
        self::assertEquals([2,2,3,3],$result->banThisItemTwo([2,2,3,3,9,7]));
    }

    public function testThreeBanThisItemsTwo()
    {
        $result = new BanThisItems;
        self::assertEquals([1,2,2,1],$result->banThisItemTwo([8,1,2,2,1,3,9,7]));
    }
}