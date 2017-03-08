<?php

use belazar13\converter\HexConverter;
use PHPUnit\Framework\TestCase;

class HexConverterTest extends TestCase
{
    public function testMin()
    {
        $c = new HexConverter();

        $result = $c->decToBase(0);
        $this->assertEquals(0, $result);

        $result = $c->baseToDec(0);
        $this->assertEquals(0, $result);
    }

    public function testMax()
    {
        $c = new HexConverter();

        $result = $c->decToBase(15);
        $this->assertEquals('f', $result);

        $result = $c->baseToDec('f');
        $this->assertEquals(15, $result);
    }
}
