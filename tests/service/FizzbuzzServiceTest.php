<?php

use App\Service\FizzbuzzService;

/**
 * Created by PhpStorm.
 * User: ihara-kenta
 * Date: 2016/09/07
 * Time: 9:16
 */
class FizzbuzzServiceTest extends PHPUnit_Framework_TestCase
{


    public function testGetOne()
    {
        $obj = new FizzbuzzService;
        $this->assertEquals('1', $obj->handle('1'));
    }

    public function testGetFizz()
    {
        $obj = new FizzbuzzService;
        $this->assertEquals('Fizz', $obj->handle('3'));
    }

    public function testGetBuzz()
    {
        $obj = new FizzbuzzService;
        $this->assertEquals('Buzz', $obj->handle('5'));
    }

    public function testGetFizzBuzz()
    {
        $obj = new FizzbuzzService;
        $this->assertEquals('Fizz Buzz', $obj->handle('15'));
    }

    public function testGetFizzBuzzArray1()
    {
        $obj = new FizzbuzzService;
        $this->assertEquals('1', $obj->Fizzbuzz(1));
    }
    public function testGetFizzBuzzArrayFizz()
    {
        $obj = new FizzbuzzService;
        $this->assertEquals('1 2 Fizz', $obj->Fizzbuzz(3));
    }

}