<?php

use PHPUnit\Framework\TestCase;

class BanThisItemsTest extends TestCase
{
    public function testOneBanThisItems()
    {
        require "../../src/HomeWork2/BanThisItems.php";
        $result = new BanThisItems();
        self::assertEquals([1],$result->banThisItem([123,456,789]));
    }
}