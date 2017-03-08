<?php

namespace belazar13\converter;

class OctConverter extends UniversalConverter
{
    public function __construct()
    {
        parent::__construct(range(0, 7));
    }
}
