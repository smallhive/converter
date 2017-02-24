> If you need to convert numbers from decimal to another use it!

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
