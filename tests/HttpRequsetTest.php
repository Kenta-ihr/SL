<?php

/**
 * Created by PhpStorm.
 * User: ihara-kenta
 * Date: 2016/09/07
 */
class HttpRequestTest extends \PHPUnit_Framework_TestCase
{
    public function testGetResponse200()
    {
        $this->assertTrue(true, 'False is not true');
    }

    public function testAssertEquals()
    {
        $expected = 'bar';
        $actual = 'bar';

        $this->assertEquals('2 3 5', $actual, 'Expected is not equal actual');
    }
}