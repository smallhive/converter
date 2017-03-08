<?php

use belazar13\converter\OctConverter;
use PHPUnit\Framework\TestCase;

class OctConverterTest extends TestCase
{
    public function testMin()
    {
        $c = new OctConverter();

        $result = $c->decToBase(0);
        $this->assertEquals(0, $result);

        $result = $c->baseToDec(0);
        $this->assertEquals(0, $result);
    }

    public function testMax()
    {
        $c = new OctConverter();

        $result = $c->decToBase(7);
        $this->assertEquals(7, $result);

        $result = $c->baseToDec(7);
        $this->assertEquals(7, $result);
    }
}
