<?php

use belazar13\converter\BinConverter;
use PHPUnit\Framework\TestCase;

class BinConverterTest extends TestCase
{
    public function testMin()
    {
        $c = new BinConverter();

        $result = $c->decToBase(0);
        $this->assertEquals(0, $result);

        $result = $c->baseToDec(0);
        $this->assertEquals(0, $result);
    }

    public function testMax()
    {
        $c = new BinConverter();

        $result = $c->decToBase(1);
        $this->assertEquals(1, $result);

        $result = $c->baseToDec(1);
        $this->assertEquals(1, $result);
    }

    public function testBin2()
    {
        $c = new BinConverter();
        $result = $c->decToBase(2);
        $this->assertEquals(10, $result);
    }

    public function testFromBin2()
    {
        $c = new BinConverter(range(0,1));
        $result = $c->baseToDec(10);
        $this->assertEquals(2, $result);
    }
}
