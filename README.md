# currency
List all currencies and create some helpers

-------------------------------

## How to install?
In your project, run in your terminal

```bash
$ composer require xx/xxxx
```

-------------------------------

## How to use?

### Price format

Transform your price from float to string
```php
use MartinAC\Currency\Helper\PriceFormat;

class myClass
{
    //will return '10.99'
    public function myMethod(): string
    {
        return PriceFormat::floatToString(10.99);
    }
}
```

Transform your price from string to float
```php
use MartinAC\Currency\Helper\PriceFormat;

class myClass
{
    //will return 10.99
    public function myMethod(): float
    {
        return PriceFormat::stringToFloat('10.99');
    }
}
```

Transform your price from float to integer (cents)
```php
use MartinAC\Currency\Helper\PriceFormat;

class myClass
{
    //will return 1099
    public function myMethod(): int
    {
        return PriceFormat::floatToCents(10.99);
    }
}
```

Transform your price from string to integer (cents)
```php
use MartinAC\Currency\Helper\PriceFormat;

class myClass
{
    //will return 1099
    public function myMethod(): int
    {
        return PriceFormat::stringToCents('10.99');
    }
}
```

Transform your price from integer (cents) to float
```php
use MartinAC\Currency\Helper\PriceFormat;

class myClass
{
    //will return 10.99
    public function myMethod(): float
    {
        return PriceFormat::centsToFloat(1099);
    }
}
```

Transform your price from integer (cents) to string
```php
use MartinAC\Currency\Helper\PriceFormat;

class myClass
{
    //will return '10.99'
    public function myMethod(): string
    {
        return PriceFormat::centsToString(1099);
    }
}
```

### Currency

Get the ISO 4217 code of any currencies
```php
use MartinAC\Currency\Enum\Currency;

class myClass
{
    //will return 'CAD'
    public function myMethod(): string
    {
        return Currency::CANADIAN_DOLLAR->value;
    }
}
```

### Currency by continent

Get the list of ISO 4217 codes of currencies by continent/sub-continent in an array
```php
use MartinAC\Currency\Continent\Currency;

class myClass
{
    //will return ['CAD', 'MXN', 'USD']
    public function myMethod(): array
    {
        $currencies = new Currency();

        return $currencies->getNorthAmerica();
    }
}
```

-------------------------------

## Wanna show your appreciation?
If you find that library useful, you can [buy me a coffee/beer](https://www.buymeacoffee.com/invite/macl)
