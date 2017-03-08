<?php

namespace belazar13\converter;

class UniversalConverter
{
    public $dictionary;
    public $invertedDictionary;

    public $base = 0;

    public function __construct($dictionary)
    {
        $this->dictionary = $dictionary;

        if (!empty($this->dictionary))
        {
            $this->base = count($this->dictionary);
            $this->invertedDictionary = array_flip($this->dictionary);
        }
    }

    public function decToBase($value)
    {
        $result = '';
        $remainder = $value;

        if ($value == 0)
        {
            return 0;
        }

        while ($remainder > 0)
        {
            $quotient = $remainder % $this->base;
            $remainder = floor($remainder / $this->base);

            $result = $this->dictionary[$quotient] . $result;
        }

        return $result;
    }

    public function baseToDec($value)
    {
        $value = strval($value);
        $maxPow = strlen($value) - 1;
        $result = 0;

        for ($i = 0; $i <= $maxPow; $i++)
        {
            $result += $this->invertedDictionary[$value[$i]] * pow($this->base, $maxPow - $i);
        }

        return $result;
    }
}
