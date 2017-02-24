<?php

namespace belazar13\converter;

class UniversalConverter
{
    public $dictionary;

    public function __construct($dictionary)
    {
        $this->dictionary = $dictionary;
    }

    public function decToBase($value)
    {
        $base = count($this->dictionary);
        $result = '';
        $remainder = $value;

        while ($remainder > 0)
        {
            $quotient = $remainder % $base;
            $remainder = floor($remainder / $base);

            $result = $this->dictionary[$quotient] . $result;
        }

        return $result;
    }

    public function baseToDec($value)
    {
        $value = strval($value);
        $base = count($this->dictionary);
        $maxPow = strlen($value) - 1;
        $result = 0;

        for ($i = 0; $i < $maxPow; $i++)
        {
            $result += $value[$i] * pow($base, $maxPow - $i);
        }

        return $result;
    }
}
