<?php

namespace belazar13\converter;

class HexConverter extends UniversalConverter
{
    public function __construct()
    {
        parent::__construct(array_merge(range(0, 9), range('a','f')));
    }
}
