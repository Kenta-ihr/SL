<?php

use App\Http\Requests;
/**
 * Created by PhpStorm.
 * User: ihara-kenta
 * Date: 2016/09/07
 */
class HelloTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @group 220
     * @group 278
     * @group 1190
     * @group tttt
     */
    public function testAssertTrue()
    {
        $this->assertTrue(true, 'False is not true');
    }

    public function testAssertEquals()
    {
        $expected = 'bar';
        $actual = 'bar';

        $this->assertEquals($expected, $actual, 'Expected is not equal actual');
    }
}