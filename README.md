## Install
The preferred way to install this extension is through [composer](http://getcomposer.org/download/):
```
composer require fedchishina/math-example-lib
```

## Usage
This package based on  PHP. Library can check the correctness of the brackets sentence.
```php
use MathExampleLib\Functions\BracketCounter;

// tests
echo BracketCounter::isCorrectExample('()'); //true
echo BracketCounter::isCorrectExample('(())'); //true
echo BracketCounter::isCorrectExample('('); //false
echo BracketCounter::isCorrectExample('())'); //false
```

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.