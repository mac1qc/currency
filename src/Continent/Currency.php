<?php

declare(strict_types=1);

namespace MartinAC\Currency\Continent;

use MartinAC\Currency\Enum\Currency AS currencyList;

class Currency
{
    public function getNorthAmerica(): array
    {
        return [
            CurrencyList::CANADIAN_DOLLAR->value,
            CurrencyList::MEXICAN_PESO->value,
            CurrencyList::UNITED_STATES_DOLLAR->value,
        ];
    }

    public function getCentralAmerica(): array
    {
        return [
            CurrencyList::BELIZE_DOLLAR->value,
            CurrencyList::COSTA_RICAN_COLON->value,
            CurrencyList::GUATEMALAN_QUETZAL->value,
            CurrencyList::HONDURAN_LEMPIRA->value,
            CurrencyList::NICARAGUAN_CORDOBA->value,
            CurrencyList::PANAMANIAN_BALBOA->value,
            CurrencyList::SALVADORAN_COLON->value,
            CurrencyList::UNITED_STATES_DOLLAR->value,
        ];
    }

    public function getSouthAmerica(): array
    {
        return [
            CurrencyList::ARGENTINE_PESO->value,
            CurrencyList::BOLIVIANO->value,
            CurrencyList::BRAZILIAN_REAL->value,
            CurrencyList::CHILEAN_PESO->value,
            CurrencyList::COLOMBIAN_PESO->value,
            CurrencyList::EURO->value,
            CurrencyList::FALKLAND_ISLANDS_POUND->value,
            CurrencyList::GUYANESE_DOLLAR->value,
            CurrencyList::PARAGUAYAN_GUARANI->value,
            CurrencyList::PERUVIAN_SOL->value,
            CurrencyList::POUND_STERLING->value,
            CurrencyList::SURINAMESE_DOLLAR->value,
            CurrencyList::UNITED_STATES_DOLLAR->value,
            CurrencyList::URUGUAYAN_PESO->value,
            CurrencyList::VENEZUELAN_DIGITAL_BOLIVAR->value,
        ];
    }

    public function getAntilles(): array
    {
        return [
            CurrencyList::ARUBAN_FLORIN->value,
            CurrencyList::BAHAMIAN_DOLLAR->value,
            CurrencyList::BARBADOS_DOLLAR->value,
            CurrencyList::CAYMAN_ISLANDS_DOLLAR->value,
            CurrencyList::CUBAN_PESO->value,
            CurrencyList::DOMINICAN_PESO->value,
            CurrencyList::EAST_CARIBBEAN_DOLLAR->value,
            CurrencyList::EURO->value,
            CurrencyList::HAITIAN_GOURDE->value,
            CurrencyList::JAMAICAN_DOLLAR->value,
            CurrencyList::NETHERLANDS_ANTILLEAN_GUILDER->value,
            CurrencyList::TRINIDAD_AND_TOBAGO_DOLLAR->value,
            CurrencyList::UNITED_STATES_DOLLAR->value,
            CurrencyList::VENEZUELAN_DIGITAL_BOLIVAR->value,
        ];
    }

    public function getEastEurope(): array
    {
        return [
            CurrencyList::ALBANIAN_LEK->value,
            CurrencyList::ARMENIAN_DRAM->value,
            CurrencyList::AZERBAIJANI_MANAT->value,
            CurrencyList::BELARUSIAN_RUBLE->value,
            CurrencyList::BOSNIA_AND_HERZEGOVINA_CONVERTIBLE_MARK->value,
            CurrencyList::BULGARIAN_LEV->value,
            CurrencyList::CZECH_KORUNA->value,
            CurrencyList::EURO->value,
            CurrencyList::GEORGIAN_LARI->value,
            CurrencyList::HUNGARIAN_FORINT->value,
            CurrencyList::MOLDOVAN_LEU->value,
            CurrencyList::MACEDONIAN_DENAR->value,
            CurrencyList::POLISH_ZLOTY->value,
            CurrencyList::ROMANIAN_LEU->value,
            CurrencyList::RUSSIAN_RUBLE->value,
            CurrencyList::SERBIAN_DINAR->value,
            CurrencyList::UKRAINIAN_HRYVNIA->value,
        ];
    }

    public function getNorthernEurope(): array
    {
        return [
            CurrencyList::DANISH_KRONE->value,
            CurrencyList::EURO->value,
            CurrencyList::ICELANDIC_KRONA->value,
            CurrencyList::NORWEGIAN_KRONE->value,
            CurrencyList::SWEDISH_KRONA->value,
        ];
    }

    public function getSouthernEurope(): array
    {
        return [
            CurrencyList::EURO->value,
            CurrencyList::TURKISH_LIRA->value,
        ];
    }

    public function getWestEurope(): array
    {
        return [
            CurrencyList::EURO->value,
            CurrencyList::SWISS_FRANC->value,
            CurrencyList::POUND_STERLING->value,
        ];
    }

    public function getCentralAfrica(): array
    {
        return [
            CurrencyList::BURUNDIAN_FRANC->value,
            CurrencyList::CFA_FRANC_BEAC->value,
            CurrencyList::CONGOLESE_FRANC->value,
            CurrencyList::SAO_TOME_AND_PRINCIPE_DOBRA->value,
        ];
    }

    public function getEasternAfrica(): array
    {
        return [
            CurrencyList::COMORO_FRANC->value,
            CurrencyList::DJIBOUTIAN_FRANC->value,
            CurrencyList::ERITREAN_NAKFA->value,
            CurrencyList::ETHIOPIAN_BIRR->value,
            CurrencyList::KENYAN_SHILLING->value,
            CurrencyList::MALAGASY_ARIARY->value,
            CurrencyList::MAURITIAN_RUPEE->value,
            CurrencyList::RWANDAN_FRANC->value,
            CurrencyList::SEYCHELLES_RUPEE->value,
            CurrencyList::SOMALIAN_SHILLING->value,
            CurrencyList::SOUTH_SUDANESE_POUND->value,
            CurrencyList::SUDANESE_POUND->value,
            CurrencyList::TANZANIAN_SHILLING->value,
            CurrencyList::UGANDAN_SHILLING->value,
        ];
    }

    public function getNorthernAfrica(): array
    {
        return [
            CurrencyList::ALGERIAN_DINAR->value,
            CurrencyList::EGYPTIAN_POUND->value,
            CurrencyList::LIBYAN_DINAR->value,
            CurrencyList::MAURITANIAN_OUGUIYA->value,
            CurrencyList::MOROCCAN_DIRHAM->value,
            CurrencyList::TUNISIAN_DINAR->value,
        ];
    }

    public function getSouthernAfrica(): array
    {
        return [
            CurrencyList::ANGOLAN_KWANZA->value,
            CurrencyList::BOTSWANA_PULA->value,
            CurrencyList::SWAZI_LILANGENI->value,
            CurrencyList::LESOTHO_LOTI->value,
            CurrencyList::MALAWIAN_KWACHA->value,
            CurrencyList::MOZAMBICAN_METICAL->value,
            CurrencyList::NAMIBIAN_DOLLAR->value,
            CurrencyList::SOUTH_AFRICAN_RAND->value,
            CurrencyList::ZAMBIAN_KWACHA->value,
            CurrencyList::ZIMBABWE_GOLD->value,
            CurrencyList::UNITED_STATES_DOLLAR->value,
        ];
    }

    public function getWesternAfrica(): array
    {
        return [
            CurrencyList::CFA_FRANC_BCEAO->value,
            CurrencyList::CAPE_VERDEAN_ESCUDO->value,
            CurrencyList::GAMBIAN_DALASI->value,
            CurrencyList::GHANAIAN_CEDI->value,
            CurrencyList::GUINEAN_FRANC->value,
            CurrencyList::LIBERIAN_DOLLAR->value,
            CurrencyList::NIGERIAN_NAIRA->value,
            CurrencyList::SIERRA_LEONEAN_LEONE->value,
        ];
    }

    public function getCentralAsia(): array
    {
        return [
            CurrencyList::KAZAKHSTANI_TENGE->value,
            CurrencyList::KYRGYZSTANI_SOM->value,
            CurrencyList::TAJIKISTANI_SOMONI->value,
            CurrencyList::TURKMENISTAN_MANAT->value,
            CurrencyList::UZBEKISTANI_SUM->value,
        ];
    }

    public function getEastAsia(): array
    {
        return [
            CurrencyList::RENMINBI->value,
            CurrencyList::HONG_KONG_DOLLAR->value,
            CurrencyList::MACANESE_PATACA->value,
            CurrencyList::JAPANESE_YEN->value,
            CurrencyList::MONGOLIAN_TOGROG->value,
            CurrencyList::NORTH_KOREAN_WON->value,
            CurrencyList::SOUTH_KOREAN_WON->value,
            CurrencyList::NEW_TAIWAN_DOLLAR->value,
        ];
    }

    public function getNorthAsia(): array
    {
        return [
            CurrencyList::RUSSIAN_RUBLE->value,
        ];
    }

    public function getSouthAsia(): array
    {
        return [
            CurrencyList::AFGHAN_AFGHANI->value,
            CurrencyList::BANGLADESHI_TAKA->value,
            CurrencyList::BHUTANESE_NGULTRUM->value,
            CurrencyList::INDIAN_RUPEE->value,
            CurrencyList::MALDIVIAN_RUFIYAA->value,
            CurrencyList::NEPALESE_RUPEE->value,
            CurrencyList::PAKISTANI_RUPEE->value,
            CurrencyList::SRI_LANKAN_RUPEE->value,
        ];
    }

    public function getSoutheastAsia(): array
    {
        return [
            CurrencyList::BRUNEI_DOLLAR->value,
            CurrencyList::CAMBODIAN_RIEL->value,
            CurrencyList::UNITED_STATES_DOLLAR->value,
            CurrencyList::INDONESIAN_RUPIAH->value,
            CurrencyList::LAO_KIP->value,
            CurrencyList::MALAYSIAN_RINGGIT->value,
            CurrencyList::MYANMAR_KYAT->value,
            CurrencyList::PHILIPPINE_PESO->value,
            CurrencyList::SINGAPORE_DOLLAR->value,
            CurrencyList::THAI_BAHT->value,
            CurrencyList::VIETNAMESE_DONG->value,
        ];
    }

    public function getWestAsia(): array
    {
        return [
            CurrencyList::TURKISH_LIRA->value,
            CurrencyList::BAHRAINI_DINAR->value,
            CurrencyList::KUWAITI_DINAR->value,
            CurrencyList::OMANI_RIAL->value,
            CurrencyList::QATARI_RIYAL->value,
            CurrencyList::SAUDI_RIYAL->value,
            CurrencyList::UNITED_ARAB_EMIRATES_DIRHAM->value,
            CurrencyList::YEMENI_RIAL->value,
            CurrencyList::GEORGIAN_LARI->value,
            CurrencyList::ARMENIAN_DRAM->value,
            CurrencyList::AZERBAIJANI_MANAT->value,
            CurrencyList::IRAQI_DINAR->value,
            CurrencyList::ISRAELI_NEW_SHEKEL->value,
            CurrencyList::JORDANIAN_DINAR->value,
            CurrencyList::LEBANESE_POUND->value,
            CurrencyList::EGYPTIAN_POUND->value,
            CurrencyList::JORDANIAN_DINAR->value,
            CurrencyList::SYRIAN_POUND->value,
            CurrencyList::IRANIAN_RIAL->value,
            CurrencyList::EURO->value,
        ];
    }

    public function getAustralasia(): array
    {
        return [
            CurrencyList::AUSTRALIAN_DOLLAR->value,
            CurrencyList::NEW_ZEALAND_DOLLAR->value,
            CurrencyList::PAPUA_NEW_GUINEAN_KINA->value,
        ];
    }

    public function getMelanesia(): array
    {
        return [
            CurrencyList::FIJI_DOLLAR->value,
            CurrencyList::PAPUA_NEW_GUINEAN_KINA->value,
            CurrencyList::SOLOMON_ISLANDS_DOLLAR->value,
            CurrencyList::VANUATU_VATU->value,
            CurrencyList::INDONESIAN_RUPIAH->value,
            CurrencyList::CFP_FRANC->value,
        ];
    }

    public function getMicronesia(): array 
    {
        return [
            CurrencyList::UNITED_STATES_DOLLAR->value,
            CurrencyList::AUSTRALIAN_DOLLAR->value,
        ];
    }

    public function getPolynesia(): array
    {
        return [
            CurrencyList::UNITED_STATES_DOLLAR->value,
            CurrencyList::NEW_ZEALAND_DOLLAR->value,
            CurrencyList::CHILEAN_PESO->value,
            CurrencyList::CFP_FRANC->value,
            CurrencyList::AUSTRALIAN_DOLLAR->value,
            CurrencyList::FIJI_DOLLAR->value,
            CurrencyList::SAMOAN_TALA->value,
            CurrencyList::TONGAN_PA_ANGA->value,
        ];
    }

    public function getAfrica(): array
    {
        return array_merge(
            $this->getCentralAfrica(),
            $this->getEasternAfrica(),
            $this->getNorthernAfrica(),
            $this->getSouthernAfrica(),
            $this->getWesternAfrica(),
        );
    }

    public function getAmerica(): array
    {
        return array_merge(
            $this->getAntilles(),
            $this->getCentralAmerica(),
            $this->getNorthAmerica(),
            $this->getSouthAmerica(),
        );
    }

    public function getAsia(): array
    {
        return array_merge(
            $this->getCentralAsia(),
            $this->getEastAsia(),
            $this->getNorthAsia(),
            $this->getSouthAsia(),
            $this->getSoutheastAsia(),
            $this->getWestAsia(),
        );
    }

    public function getEurope(): array
    {
        return array_merge(
            $this->getEastEurope(),
            $this->getWestEurope(),
            $this->getNorthernEurope(),
            $this->getSouthernEurope(),
        );
    }

    public function getOceania(): array
    {
        return array_merge(
            $this->getAustralasia(),
            $this->getMelanesia(),
            $this->getMicronesia(),
            $this->getPolynesia(),
        );
    }

    public function getWorld(): array
    {
        return array_merge(
            $this->getAfrica(),
            $this->getAmerica(),
            $this->getAsia(),
            $this->getEurope(),
            $this->getOceania(),
        );
    }
}