<?php

declare(strict_types=1);

namespace MartinAC\Currency\tests\Enum;

use MartinAC\Currency\Enum\Currency;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
    public function testEnumValue(): void
    {
        $this->assertSame('AED', Currency::UNITED_ARAB_EMIRATES_DIRHAM->value);
        $this->assertSame('BRL', Currency::BRAZILIAN_REAL->value);
        $this->assertSame('CAD', Currency::CANADIAN_DOLLAR->value);
        $this->assertSame('EUR', Currency::EURO->value);
    }
}