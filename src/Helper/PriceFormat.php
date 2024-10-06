<?php

declare(strict_types=1);

namespace MartinAC\Currency\Helper;

class PriceFormat
{
    public static function floatToString(float $value): string
    {
        return number_format($value, 2);
    }

    public static function stringToFloat(string $value): float
    {
        return (float)number_format((float)$value, 2);
    }

    public static function floatToCents(float $value): int
    {
        return (int)($value * 100);
    }

    public static function stringToCents(string $value): int
    {
        return self::floatToCents(self::stringToFloat($value));
    }
}