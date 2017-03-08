> If you need to convert numbers from decimal to another, use it!

# Quick start

Convert dec to bin

``` PHP
use belazar13\converter\UniversalConverter;

require_once __DIR__ . '/autoload.php';

$c = new UniversalConverter(range(0, 1));
print $c->decToBase(6);
// 110
```

Convert bin to dec

``` PHP
use belazar13\converter\UniversalConverter;

require_once __DIR__ . '/autoload.php';

$c = new UniversalConverter(range(0, 1));
print $c->baseToDec(110);
// 6
```

# Some special converters

You may choose one specify converter

## BinConverter

``` PHP
use belazar13\converter\BinConverter;

require_once __DIR__ . '/autoload.php';

$c = new BinConverter();
print $c->baseToDec(110);
// 6
```

## OctConverter

``` PHP
<?php

use belazar13\converter\OctConverter;

require_once __DIR__ . '/autoload.php';

$c = new OctConverter();
print $c->decToBase(100500);
// 304224
```

## HexConverter

``` PHP
<?php

use belazar13\converter\HexConverter;

require_once __DIR__ . '/autoload.php';

$c = new HexConverter();
print $c->decToBase(100500);

// 18894
```
