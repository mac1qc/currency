<?php

declare(strict_types=1);

namespace MartinAC\Currency\tests\Helper;

use MartinAC\Currency\Helper\PriceFormat;
use PHPUnit\Framework\TestCase;

class PriceFormatTest extends TestCase
{
    public function testFloatToString(): void
    {
        $this->assertSame('10.00', PriceFormat::floatToString(10.00));
    }

    public function testStringToFloat(): void
    {
        $this->assertSame(10.00, PriceFormat::stringToFloat('10.00'));
    }

    public function testFloatToCents(): void
    {
        $this->assertSame(1000, PriceFormat::floatToCents(10.00));
    }
    
    public function testStringToCents(): void
    {
        $this->assertSame(1000, PriceFormat::stringToCents('10.00'));
    }
}