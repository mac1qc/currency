<?php

declare(strict_types=1);

namespace MartinAC\Currency\tests\Continent;

use MartinAC\Currency\Continent\Currency;
use MartinAC\Currency\Enum\Currency AS CurrencyList;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
    public function testGetAfrica(): void
    {
        $currency = new Currency();

        $this->assertContains(CurrencyList::BURUNDIAN_FRANC->value, $currency->getAfrica());
        $this->assertContains(CurrencyList::COMORO_FRANC->value, $currency->getAfrica());
        $this->assertContains(CurrencyList::ALGERIAN_DINAR->value, $currency->getAfrica());
        $this->assertContains(CurrencyList::ANGOLAN_KWANZA->value, $currency->getAfrica());
        $this->assertContains(CurrencyList::CFA_FRANC_BCEAO->value, $currency->getAfrica());
    }

    public function testGetAmerica(): void
    {
        $currency = new Currency();

        $this->assertContains(CurrencyList::CANADIAN_DOLLAR->value, $currency->getAmerica());
        $this->assertContains(CurrencyList::BELIZE_DOLLAR->value, $currency->getAmerica());
        $this->assertContains(CurrencyList::ARGENTINE_PESO->value, $currency->getAmerica());
        $this->assertContains(CurrencyList::ARUBAN_FLORIN->value, $currency->getAmerica());
    }

    public function testGetAsia(): void
    {
        $currency = new Currency();

        $this->assertContains(CurrencyList::KAZAKHSTANI_TENGE->value, $currency->getAsia());
        $this->assertContains(CurrencyList::RENMINBI->value, $currency->getAsia());
        $this->assertContains(CurrencyList::RUSSIAN_RUBLE->value, $currency->getAsia());
        $this->assertContains(CurrencyList::AFGHAN_AFGHANI->value, $currency->getAsia());
        $this->assertContains(CurrencyList::BRUNEI_DOLLAR->value, $currency->getAsia());
        $this->assertContains(CurrencyList::TURKISH_LIRA->value, $currency->getAsia());
    }

    public function testGetEurope(): void
    {
        $currency = new Currency();

        $this->assertContains(CurrencyList::ALBANIAN_LEK->value, $currency->getEurope());
        $this->assertContains(CurrencyList::DANISH_KRONE->value, $currency->getEurope());
        $this->assertContains(CurrencyList::EURO->value, $currency->getEurope());
        $this->assertContains(CurrencyList::SWISS_FRANC->value, $currency->getEurope());
    }

    public function testGetOceania(): void
    {
        $currency = new Currency();

        $this->assertContains(CurrencyList::AUSTRALIAN_DOLLAR->value, $currency->getOceania());
        $this->assertContains(CurrencyList::FIJI_DOLLAR->value, $currency->getOceania());
        $this->assertContains(CurrencyList::UNITED_STATES_DOLLAR->value, $currency->getOceania());
        $this->assertContains(CurrencyList::CHILEAN_PESO->value, $currency->getOceania());
    }
}