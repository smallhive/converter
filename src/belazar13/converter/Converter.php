<?php

namespace belazar13\converter;

class Converter
{
    public $dictionary;

    public function __construct($dictionary)
    {
        $this->dictionary = $dictionary;
    }

    public function decToBase($value)
    {
        $d = count($this->dictionary);
        $result = '';

        while ($value > 0)
        {
            $r = $value % $d;
            $value = floor($value / $d);

            $result = $this->dictionary[$r] . $result;
        }

        return $result;
    }
}
