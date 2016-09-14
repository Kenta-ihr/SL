<?php
use App\Service\WhetherUvService;

/**
 * Created by PhpStorm.
 * User: ihara-kenta
 * Date: 2016/09/08
 * Time: 13:15
 */
class WhetherUvServiceTest extends PHPUnit_Framework_TestCase
{
    public function testGetLow()
    {
        $obj = new WhetherUvService;
        $this->assertEquals('low', $obj->handle(2.0));
    }

    public function testGetModerate()
    {
        $obj = new WhetherUvService;
        $this->assertEquals('moderate', $obj->handle(4.0));
    }

    public function testGetHigh()
    {
        $obj = new WhetherUvService;
        $this->assertEquals('high', $obj->handle(6.5));
    }

    public function testGetVeryHigh()
    {
        $obj = new WhetherUvService;
        $this->assertEquals('veryhigh', $obj->handle(8.9));
    }

    public function testGetExtreme()
    {
        $obj = new WhetherUvService;
        $this->assertEquals('extreme', $obj->handle(14));
    }

    public function localeProvider()
    {
        return [
            [2.1, 2.14222],
            [2.2, 2.15622],
            [2.0, 2],
        ];
    }

    /**
     * @dataProvider localeProvider
     */
    public function testGetLocaleRounded($excepted, $actual)
    {
        $obj = new WhetherUvService;
        $this->assertEquals($excepted, $obj->roundLocation($actual));
    }

}