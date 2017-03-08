<?php

use PHPUnit\Framework\TestCase;

class UniversalConverterTest extends TestCase
{
    public function testBin2()
    {
        $c = new \belazar13\converter\UniversalConverter(range(0,1));
        $result = $c->decToBase(2);
        $this->assertEquals(10, $result);
    }

    public function testFromBin2()
    {
        $c = new \belazar13\converter\UniversalConverter(range(0,1));
        $result = $c->baseToDec(10);
        $this->assertEquals(2, $result);
    }

    public function testBin8()
    {
        $c = new \belazar13\converter\UniversalConverter(range(0,1));
        $result = $c->decToBase(8);
        $this->assertEquals(1000, $result);
    }

    public function testFromBin8()
    {
        $c = new \belazar13\converter\UniversalConverter(range(0,1));
        $result = $c->baseToDec(1000);
        $this->assertEquals(8, $result);
    }

    public function testBin49678354()
    {
        $c = new \belazar13\converter\UniversalConverter(range(0,1));
        $result = $c->decToBase(49678354);
        $this->assertEquals('10111101100000100000010010', $result);
    }

    public function testFromBin49678354()
    {
        $c = new \belazar13\converter\UniversalConverter(range(0,1));
        $result = $c->baseToDec('10111101100000100000010010');
        $this->assertEquals(49678354, $result);
    }
}
