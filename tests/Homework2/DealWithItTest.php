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
    public function testOneWithRegexp()
    {
        require "../src"

    }

    public function testOneWithoutRegexp()
    {

    }


$result = new DealWithIt();
$result->findMatchesWithRegexp('weofijeio abcd@abcd.ru def@def.ru eowifj');
$result->findMatchesWithoutRegexp('weofijeio abcd@abcd.ru def@def.ru eowifj');
}
