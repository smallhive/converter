<?php

use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    public function testBin2()
    {
        $c = new \belazar13\converter\Converter(range(0,1));
        $result = $c->decToBase(2);
        $this->assertEquals(10, $result);
    }

    public function testBin8()
    {
        $c = new \belazar13\converter\Converter(range(0,1));
        $result = $c->decToBase(8);
        $this->assertEquals(1000, $result);
    }

    public function testBin49678354()
    {
        $c = new \belazar13\converter\Converter(range(0,1));
        $result = $c->decToBase(49678354);
        $this->assertEquals('10111101100000100000010010', $result);
    }
}
