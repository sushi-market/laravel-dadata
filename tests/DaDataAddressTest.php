<?php

namespace SushiMarket\DaData\Tests;

use SushiMarket\DaData\Facades\DaDataAddress;

class DaDataAddressTest extends TestCase
{

    /**
     * @test
     **/
    public function testStandardizationAddressFromString()
    {
        $this->assertSame(
            DaDataAddress::standardization('мск сухонска 11/-89'),
            $this->StandardizationAddressProvider()
        );
    }

    /**
     * @test
     */
    public function testPromptAddressFromString()
    {
        $this->assertSame(
            DaDataAddress::prompt('москва хабар', 2),
            $this->PromptAddressProvider()
        );
    }

    /**
     * @test
     */
    public function testGeolocationAddress()
    {
        $this->assertSame(
            DaDataAddress::geolocate(55.878, 37.653, 1),
            $this->GeolocationAddressProvider()
        );
    }

    /**
     * @test
     */
    public function testIpLocateAddress()
    {
        $this->assertSame(
            DaDataAddress::iplocate('46.226.227.20', 1),
            $this->Ipv4AddressProvider()
        );
    }

    /**
     * @test
     */
    public function testIdAddress()
    {
        $this->assertSame(
            DaDataAddress::id('9120b43f-2fae-4838-a144-85e43c2bfb29', 1),
            $this->IdAddressProvider()
        );
    }

    /**
     * @test
     */
    public function testGetPostalUnitByAddress()
    {
        $this->assertSame(
            DaDataAddress::postalUnitByAddress('дежнева 2а', 1),
            $this->PostalUnitByAddreessProvider()
        );
    }

    /**
     * @test
     */
    public function testGetPostalUnitById()
    {
        $this->assertSame(
            DaDataAddress::postalUnitById('127642', 1),
            $this->PostalUnitByAddreessProvider()
        );
    }

    /**
     * @test
     */
    public function testGetPostalUnitByGeoCoorinates()
    {
        $this->assertSame(
            DaDataAddress::postalUnitByGeoLocate(55.878, 37.653, 1000, 2),
            $this->PostalUnitByGeoCoordinatesProvider()
        );
    }

    /**
     * @test
     */
    public function testDeliveryAddress()
    {
        $this->assertSame(
            DaDataAddress::delivery('3100400100000'),
            $this->DeliveryProvider()
        );
    }

    /**
     * @test
     */
    public function testFiasAddress()
    {
        $this->assertSame(
            DaDataAddress::fias('9120b43f-2fae-4838-a144-85e43c2bfb29'),
            $this->FiasAddressProvider()
        );
    }

    /**
     * @return array|\array[][]
     */
    public function FiasAddressProvider() : array
    {
        return [
            "suggestions" => [
                [
                    "value" => "г Москва, ул Снежная",
                    "unrestricted_value" => "129323, г Москва, ул Снежная",
                    "data" => [
                        "postal_code" => "129323",
                        "region_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                        "region_kladr_id" => "7700000000000",
                        "region_with_type" => "г Москва",
                        "region_type" => "г",
                        "region_type_full" => "город",
                        "region" => "Москва",
                        "area_fias_id" => null,
                        "area_kladr_id" => null,
                        "area_with_type" => null,
                        "area_type" => null,
                        "area_type_full" => null,
                        "area" => null,
                        "city_fias_id" => null,
                        "city_kladr_id" => null,
                        "city_with_type" => null,
                        "city_type" => null,
                        "city_type_full" => null,
                        "city" => null,
                        "city_district_fias_id" => null,
                        "city_district_kladr_id" => null,
                        "city_district_with_type" => null,
                        "city_district_type" => null,
                        "city_district_type_full" => null,
                        "city_district" => null,
                        "settlement_fias_id" => null,
                        "settlement_kladr_id" => null,
                        "settlement_with_type" => null,
                        "settlement_type" => null,
                        "settlement_type_full" => null,
                        "settlement" => null,
                        "planning_structure_fias_id" => null,
                        "planning_structure_kladr_id" => null,
                        "planning_structure_with_type" => null,
                        "planning_structure_type" => null,
                        "planning_structure_type_full" => null,
                        "planning_structure" => null,
                        "street_fias_id" => "9120b43f-2fae-4838-a144-85e43c2bfb29",
                        "street_kladr_id" => "77000000000268400",
                        "street_with_type" => "ул Снежная",
                        "street_type" => "ул",
                        "street_type_full" => "улица",
                        "street" => "Снежная",
                        "house_fias_id" => null,
                        "house_kladr_id" => null,
                        "house_type" => null,
                        "house" => null,
                        "block" => null,
                        "building_type" => null,
                        "building" => null,
                        "fias_id" => "9120b43f-2fae-4838-a144-85e43c2bfb29",
                        "fias_code" => "7700000000000002684",
                        "fias_level" => "7",
                        "fias_actuality_state" => "0",
                        "kladr_id" => "77000000000268400",
                        "capital_marker" => "0",
                        "okato" => "45280580000",
                        "oktmo" => "45361000",
                        "cadastral_number" => null,
                        "tax_office" => "7716",
                        "tax_office_legal" => "7716",
                        "history_values" => null,
                        "source" => null,
                        "qc" => null,
                    ]
                ]
            ]
        ];
    }

    /**
     * @return array
     */
    public function DeliveryProvider() : array
    {
        return [
            "suggestions" => [
                [
                    "value" => "3100400100000",
                    "unrestricted_value" => "fe7eea4a-875a-4235-aa61-81c2a37a0440",
                    "data" => [
                        "kladr_id" => "3100400100000",
                        "fias_id" => "fe7eea4a-875a-4235-aa61-81c2a37a0440",
                        "boxberry_id" => "01929",
                        "cdek_id" => "344",
                        "dpd_id" => "196006461",
                    ]
                ]
            ]
        ];
    }

    /**
     * @return array|\array[][]
     */
    public function PostalUnitByGeoCoordinatesProvider() : array
    {
        return [
            "suggestions" => [
                [
                    "value" => "127642",
                    "unrestricted_value" => "г Москва, проезд Дежнёва, д 2А",
                    "data" => [
                        "postal_code" => "127642",
                        "is_closed" => false,
                        "type_code" => "ГОПС",
                        "address_str" => "г Москва, проезд Дежнёва, д 2А",
                        "address_kladr_id" => "7700000000000",
                        "address_qc" => "0",
                        "geo_lat" => 55.872127,
                        "geo_lon" => 37.651223,
                        "schedule_mon" => "08:00-20:00",
                        "schedule_tue" => "08:00-20:00",
                        "schedule_wed" => "08:00-20:00",
                        "schedule_thu" => "08:00-20:00",
                        "schedule_fri" => "08:00-20:00",
                        "schedule_sat" => "09:00-18:00",
                        "schedule_sun" => "09:00-18:00",
                    ],
                ], [
                    "value" => "127221",
                    "unrestricted_value" => "г Москва, ул Полярная, д 16 к 1",
                    "data" => [
                        "postal_code" => "127221",
                        "is_closed" => false,
                        "type_code" => "ГОПС",
                        "address_str" => "г Москва, ул Полярная, д 16 к 1",
                        "address_kladr_id" => "7700000000000",
                        "address_qc" => "0",
                        "geo_lat" => 55.876607,
                        "geo_lon" => 37.637308,
                        "schedule_mon" => "08:00-20:00",
                        "schedule_tue" => "08:00-20:00",
                        "schedule_wed" => "08:00-20:00",
                        "schedule_thu" => "08:00-20:00",
                        "schedule_fri" => "08:00-20:00",
                        "schedule_sat" => "09:00-18:00",
                        "schedule_sun" => "09:00-18:00",
                    ]
                ]
            ]
        ];
    }

    /**
     * @return array|array[]
     */
    public function PostalUnitByAddreessProvider() : array
    {
        return [
            "suggestions" => [
            [
                "value" => "127642",
                "unrestricted_value" => "г Москва, проезд Дежнёва, д 2А",
                "data" => [
                    "postal_code" => "127642",
                    "is_closed" => false,
                    "type_code" => "ГОПС",
                    "address_str" => "г Москва, проезд Дежнёва, д 2А",
                    "address_kladr_id" => "7700000000000",
                    "address_qc" => "0",
                    "geo_lat" => 55.872127,
                    "geo_lon" => 37.651223,
                    "schedule_mon" => "08:00-20:00",
                    "schedule_tue" => "08:00-20:00",
                    "schedule_wed" => "08:00-20:00",
                    "schedule_thu" => "08:00-20:00",
                    "schedule_fri" => "08:00-20:00",
                    "schedule_sat" => "09:00-18:00",
                    "schedule_sun" => "09:00-18:00",
                ],
            ]]
        ];
    }

    /**
     * @return array
     */
    public function IdAddressProvider() : array
    {
        return [
            "suggestions" => [
                [
                    "value" => "г Москва, ул Снежная",
                    "unrestricted_value" => "129323, г Москва, р-н Свиблово, ул Снежная",
                    "data" => [
                        "postal_code" => "129323",
                        "country" => "Россия",
                        "country_iso_code" => "RU",
                        "federal_district" => "Центральный",
                        "region_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                        "region_kladr_id" => "7700000000000",
                        "region_iso_code" => "RU-MOW",
                        "region_with_type" => "г Москва",
                        "region_type" => "г",
                        "region_type_full" => "город",
                        "region" => "Москва",
                        "area_fias_id" => null,
                        "area_kladr_id" => null,
                        "area_with_type" => null,
                        "area_type" => null,
                        "area_type_full" => null,
                        "area" => null,
                        "city_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                        "city_kladr_id" => "7700000000000",
                        "city_with_type" => "г Москва",
                        "city_type" => "г",
                        "city_type_full" => "город",
                        "city" => "Москва",
                        "city_area" => "Северо-восточный",
                        "city_district_fias_id" => null,
                        "city_district_kladr_id" => null,
                        "city_district_with_type" => "р-н Свиблово",
                        "city_district_type" => "р-н",
                        "city_district_type_full" => "район",
                        "city_district" => "Свиблово",
                        "settlement_fias_id" => null,
                        "settlement_kladr_id" => null,
                        "settlement_with_type" => null,
                        "settlement_type" => null,
                        "settlement_type_full" => null,
                        "settlement" => null,
                        "street_fias_id" => "9120b43f-2fae-4838-a144-85e43c2bfb29",
                        "street_kladr_id" => "77000000000268400",
                        "street_with_type" => "ул Снежная",
                        "street_type" => "ул",
                        "street_type_full" => "улица",
                        "street" => "Снежная",
                        "house_fias_id" => null,
                        "house_kladr_id" => null,
                        "house_type" => null,
                        "house_type_full" => null,
                        "house" => null,
                        "block_type" => null,
                        "block_type_full" => null,
                        "block" => null,
                        'flat_fias_id' => null,
                        "flat_type" => null,
                        "flat_type_full" => null,
                        "flat" => null,
                        "flat_area" => null,
                        "square_meter_price" => null,
                        "flat_price" => null,
                        "postal_box" => null,
                        "fias_id" => "9120b43f-2fae-4838-a144-85e43c2bfb29",
                        "fias_code" => "77000000000000026840000",
                        "fias_level" => "7",
                        "fias_actuality_state" => "0",
                        "kladr_id" => "77000000000268400",
                        "geoname_id" => "524901",
                        "capital_marker" => "0",
                        "okato" => "45280580000",
                        "oktmo" => "45361000",
                        "tax_office" => "7716",
                        "tax_office_legal" => "7716",
                        "timezone" => null,
                        "geo_lat" => "55.8523466",
                        "geo_lon" => "37.6469376",
                        "beltway_hit" => null,
                        "beltway_distance" => null,
                        "metro" => null,
                        "qc_geo" => "2",
                        "qc_complete" => null,
                        "qc_house" => null,
                        "history_values" => null,
                        "unparsed_parts" => null,
                        "source" => null,
                        "qc" => null,
                    ],
                ],
            ]
        ];
    }

    /**
     * @return array|array[]
     */
    public function Ipv4AddressProvider() : array
    {
        return [
            "location" => [
                "value" => "г Краснодар",
                "unrestricted_value" => "350000, Краснодарский край, г Краснодар",
                "data" => [
                    "postal_code" => "350000",
                    "country" => "Россия",
                    "country_iso_code" => "RU",
                    "federal_district" => "Южный",
                    "region_fias_id" => "d00e1013-16bd-4c09-b3d5-3cb09fc54bd8",
                    "region_kladr_id" => "2300000000000",
                    "region_iso_code" => "RU-KDA",
                    "region_with_type" => "Краснодарский край",
                    "region_type" => "край",
                    "region_type_full" => "край",
                    "region" => "Краснодарский",
                    "area_fias_id" => null,
                    "area_kladr_id" => null,
                    "area_with_type" => null,
                    "area_type" => null,
                    "area_type_full" => null,
                    "area" => null,
                    "city_fias_id" => "7dfa745e-aa19-4688-b121-b655c11e482f",
                    "city_kladr_id" => "2300000100000",
                    "city_with_type" => "г Краснодар",
                    "city_type" => "г",
                    "city_type_full" => "город",
                    "city" => "Краснодар",
                    "city_area" => null,
                    "city_district_fias_id" => null,
                    "city_district_kladr_id" => null,
                    "city_district_with_type" => null,
                    "city_district_type" => null,
                    "city_district_type_full" => null,
                    "city_district" => null,
                    "settlement_fias_id" => null,
                    "settlement_kladr_id" => null,
                    "settlement_with_type" => null,
                    "settlement_type" => null,
                    "settlement_type_full" => null,
                    "settlement" => null,
                    "street_fias_id" => null,
                    "street_kladr_id" => null,
                    "street_with_type" => null,
                    "street_type" => null,
                    "street_type_full" => null,
                    "street" => null,
                    "house_fias_id" => null,
                    "house_kladr_id" => null,
                    "house_type" => null,
                    "house_type_full" => null,
                    "house" => null,
                    "block_type" => null,
                    "block_type_full" => null,
                    "block" => null,
                    'flat_fias_id' => null,
                    "flat_type" => null,
                    "flat_type_full" => null,
                    "flat" => null,
                    "flat_area" => null,
                    "square_meter_price" => null,
                    "flat_price" => null,
                    "postal_box" => null,
                    "fias_id" => "7dfa745e-aa19-4688-b121-b655c11e482f",
                    "fias_code" => "23000001000000000000000",
                    "fias_level" => "4",
                    "fias_actuality_state" => "0",
                    "kladr_id" => "2300000100000",
                    "geoname_id" => "542420",
                    "capital_marker" => "2",
                    "okato" => "03401000000",
                    "oktmo" => "03701000001",
                    "tax_office" => "2300",
                    "tax_office_legal" => "2300",
                    "timezone" => null,
                    "geo_lat" => "45.0401604",
                    "geo_lon" => "38.9759647",
                    "beltway_hit" => null,
                    "beltway_distance" => null,
                    "metro" => null,
                    "qc_geo" => "4",
                    "qc_complete" => null,
                    "qc_house" => null,
                    "history_values" => null,
                    "unparsed_parts" => null,
                    "source" => null,
                    "qc" => null,
                ],
            ]
        ];
    }

    /**
     * @return array|\array[][]
     */
    public function GeolocationAddressProvider() : array
    {
        return [
            "suggestions" => [
                [
                    "value" => "г Москва, ул Сухонская, д 11",
                    "unrestricted_value" => "127642, г Москва, р-н Северное Медведково, ул Сухонская, д 11",
                    "data" => [
                        "postal_code" => "127642",
                        "country" => "Россия",
                        "country_iso_code" => "RU",
                        "federal_district" => "Центральный",
                        "region_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                        "region_kladr_id" => "7700000000000",
                        "region_iso_code" => "RU-MOW",
                        "region_with_type" => "г Москва",
                        "region_type" => "г",
                        "region_type_full" => "город",
                        "region" => "Москва",
                        "area_fias_id" => null,
                        "area_kladr_id" => null,
                        "area_with_type" => null,
                        "area_type" => null,
                        "area_type_full" => null,
                        "area" => null,
                        "city_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                        "city_kladr_id" => "7700000000000",
                        "city_with_type" => "г Москва",
                        "city_type" => "г",
                        "city_type_full" => "город",
                        "city" => "Москва",
                        "city_area" => "Северо-восточный",
                        "city_district_fias_id" => null,
                        "city_district_kladr_id" => null,
                        "city_district_with_type" => "р-н Северное Медведково",
                        "city_district_type" => "р-н",
                        "city_district_type_full" => "район",
                        "city_district" => "Северное Медведково",
                        "settlement_fias_id" => null,
                        "settlement_kladr_id" => null,
                        "settlement_with_type" => null,
                        "settlement_type" => null,
                        "settlement_type_full" => null,
                        "settlement" => null,
                        "street_fias_id" => "95dbf7fb-0dd4-4a04-8100-4f6c847564b5",
                        "street_kladr_id" => "77000000000283600",
                        "street_with_type" => "ул Сухонская",
                        "street_type" => "ул",
                        "street_type_full" => "улица",
                        "street" => "Сухонская",
                        "house_fias_id" => "5ee84ac0-eb9a-4b42-b814-2f5f7c27c255",
                        "house_kladr_id" => "7700000000028360004",
                        "house_type" => "д",
                        "house_type_full" => "дом",
                        "house" => "11",
                        "block_type" => null,
                        "block_type_full" => null,
                        "block" => null,
                        'flat_fias_id' => null,
                        "flat_type" => null,
                        "flat_type_full" => null,
                        "flat" => null,
                        "flat_area" => null,
                        "square_meter_price" => null,
                        "flat_price" => null,
                        "postal_box" => null,
                        "fias_id" => "5ee84ac0-eb9a-4b42-b814-2f5f7c27c255",
                        "fias_code" => "77000000000000028360004",
                        "fias_level" => "8",
                        "fias_actuality_state" => "0",
                        "kladr_id" => "7700000000028360004",
                        "geoname_id" => "524901",
                        "capital_marker" => "0",
                        "okato" => "45280583000",
                        "oktmo" => "45362000",
                        "tax_office" => "7715",
                        "tax_office_legal" => "7715",
                        "timezone" => null,
                        "geo_lat" => "55.8782557",
                        "geo_lon" => "37.65372",
                        "beltway_hit" => null,
                        "beltway_distance" => null,
                        "metro" => null,
                        "qc_geo" => "0",
                        "qc_complete" => null,
                        "qc_house" => null,
                        "history_values" => null,
                        "unparsed_parts" => null,
                        "source" => null,
                        "qc" => null,
                    ],
                ]
            ]
        ];
    }

    /**
     * @return array|\array[][]
     */
    public function PromptAddressProvider() : array
    {
        return [
            "suggestions" => [
                [
                    "value" => "г Москва, ул Хабаровская",
                    "unrestricted_value" => "г Москва, ул Хабаровская",
                    "data" => [
                        "postal_code" => null,
                        "country" => "Россия",
                        "country_iso_code" => "RU",
                        "federal_district" => null,
                        "region_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                        "region_kladr_id" => "7700000000000",
                        "region_iso_code" => "RU-MOW",
                        "region_with_type" => "г Москва",
                        "region_type" => "г",
                        "region_type_full" => "город",
                        "region" => "Москва",
                        "area_fias_id" => null,
                        "area_kladr_id" => null,
                        "area_with_type" => null,
                        "area_type" => null,
                        "area_type_full" => null,
                        "area" => null,
                        "city_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                        "city_kladr_id" => "7700000000000",
                        "city_with_type" => "г Москва",
                        "city_type" => "г",
                        "city_type_full" => "город",
                        "city" => "Москва",
                        "city_area" => null,
                        "city_district_fias_id" => null,
                        "city_district_kladr_id" => null,
                        "city_district_with_type" => null,
                        "city_district_type" => null,
                        "city_district_type_full" => null,
                        "city_district" => null,
                        "settlement_fias_id" => null,
                        "settlement_kladr_id" => null,
                        "settlement_with_type" => null,
                        "settlement_type" => null,
                        "settlement_type_full" => null,
                        "settlement" => null,
                        "street_fias_id" => "32fcb102-2a50-44c9-a00e-806420f448ea",
                        "street_kladr_id" => "77000000000713400",
                        "street_with_type" => "ул Хабаровская",
                        "street_type" => "ул",
                        "street_type_full" => "улица",
                        "street" => "Хабаровская",
                        "house_fias_id" => null,
                        "house_kladr_id" => null,
                        "house_type" => null,
                        "house_type_full" => null,
                        "house" => null,
                        "block_type" => null,
                        "block_type_full" => null,
                        "block" => null,
                        'flat_fias_id' => null,
                        "flat_type" => null,
                        "flat_type_full" => null,
                        "flat" => null,
                        "flat_area" => null,
                        "square_meter_price" => null,
                        "flat_price" => null,
                        "postal_box" => null,
                        "fias_id" => "32fcb102-2a50-44c9-a00e-806420f448ea",
                        "fias_code" => "7700000000000007134",
                        "fias_level" => "7",
                        "fias_actuality_state" => "0",
                        "kladr_id" => "77000000000713400",
                        "geoname_id" => "524894",
                        "capital_marker" => "0",
                        "okato" => "45263564000",
                        "oktmo" => "45305000",
                        "tax_office" => "7718",
                        "tax_office_legal" => "7718",
                        "timezone" => null,
                        "geo_lat" => "55.821168",
                        "geo_lon" => "37.82608",
                        "beltway_hit" => null,
                        "beltway_distance" => null,
                        "metro" => null,
                        "qc_geo" => "2",
                        "qc_complete" => null,
                        "qc_house" => null,
                        "history_values" => [
                            "ул Черненко",
                        ],
                        "unparsed_parts" => null,
                        "source" => null,
                        "qc" => null,
                    ],
                ], [
                    "value" => "г Москва, поселение Московский, г Московский, ул Хабарова",
                    "unrestricted_value" => "г Москва, поселение Московский, г Московский, ул Хабарова",
                    "data" => [
                        "postal_code" => null,
                        "country" => "Россия",
                        "country_iso_code" => "RU",
                        "federal_district" => null,
                        "region_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                        "region_kladr_id" => "7700000000000",
                        "region_iso_code" => "RU-MOW",
                        "region_with_type" => "г Москва",
                        "region_type" => "г",
                        "region_type_full" => "город",
                        "region" => "Москва",
                        "area_fias_id" => "762758bb-18b9-440f-bc61-8e1e77ff3fd8",
                        "area_kladr_id" => "7701100000000",
                        "area_with_type" => "поселение Московский",
                        "area_type" => "п",
                        "area_type_full" => "поселение",
                        "area" => "Московский",
                        "city_fias_id" => "fbcf1fff-1d7c-445e-ad92-b71c08b8aba3",
                        "city_kladr_id" => "7701100200000",
                        "city_with_type" => "г Московский",
                        "city_type" => "г",
                        "city_type_full" => "город",
                        "city" => "Московский",
                        "city_area" => null,
                        "city_district_fias_id" => null,
                        "city_district_kladr_id" => null,
                        "city_district_with_type" => null,
                        "city_district_type" => null,
                        "city_district_type_full" => null,
                        "city_district" => null,
                        "settlement_fias_id" => null,
                        "settlement_kladr_id" => null,
                        "settlement_with_type" => null,
                        "settlement_type" => null,
                        "settlement_type_full" => null,
                        "settlement" => null,
                        "street_fias_id" => "4d70a35d-9246-4d9c-bcf1-90812ad056a3",
                        "street_kladr_id" => "77011002000003700",
                        "street_with_type" => "ул Хабарова",
                        "street_type" => "ул",
                        "street_type_full" => "улица",
                        "street" => "Хабарова",
                        "house_fias_id" => null,
                        "house_kladr_id" => null,
                        "house_type" => null,
                        "house_type_full" => null,
                        "house" => null,
                        "block_type" => null,
                        "block_type_full" => null,
                        "block" => null,
                        'flat_fias_id' => null,
                        "flat_type" => null,
                        "flat_type_full" => null,
                        "flat" => null,
                        "flat_area" => null,
                        "square_meter_price" => null,
                        "flat_price" => null,
                        "postal_box" => null,
                        "fias_id" => "4d70a35d-9246-4d9c-bcf1-90812ad056a3",
                        "fias_code" => "7701100200000000037",
                        "fias_level" => "7",
                        "fias_actuality_state" => "0",
                        "kladr_id" => "77011002000003700",
                        "geoname_id" => "857690",
                        "capital_marker" => "0",
                        "okato" => "45297565001",
                        "oktmo" => "45952000",
                        "tax_office" => "7751",
                        "tax_office_legal" => "7751",
                        "timezone" => null,
                        "geo_lat" => "55.59483",
                        "geo_lon" => "37.35963",
                        "beltway_hit" => null,
                        "beltway_distance" => null,
                        "metro" => null,
                        "qc_geo" => "2",
                        "qc_complete" => null,
                        "qc_house" => null,
                        "history_values" => null,
                        "unparsed_parts" => null,
                        "source" => null,
                        "qc" => null,
                    ],
                ],
            ],
        ];
    }

    /**
     * @return array|array[]
     **/
    public function StandardizationAddressProvider() : array
    {
        return [
            [
                "source" => "мск сухонска 11/-89",
                "result" => "г Москва, ул Сухонская, д 11, кв 89",
                "postal_code" => "127642",
                "country" => "Россия",
                "country_iso_code" => "RU",
                "federal_district" => "Центральный",
                "region_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                "region_kladr_id" => "7700000000000",
                "region_iso_code" => "RU-MOW",
                "region_with_type" => "г Москва",
                "region_type" => "г",
                "region_type_full" => "город",
                "region" => "Москва",
                "area_fias_id" => null,
                "area_kladr_id" => null,
                "area_with_type" => null,
                "area_type" => null,
                "area_type_full" => null,
                "area" => null,
                "city_fias_id" => null,
                "city_kladr_id" => null,
                "city_with_type" => null,
                "city_type" => null,
                "city_type_full" => null,
                "city" => null,
                "city_area" => "Северо-восточный",
                "city_district_fias_id" => null,
                "city_district_kladr_id" => null,
                "city_district_with_type" => "р-н Северное Медведково",
                "city_district_type" => "р-н",
                "city_district_type_full" => "район",
                "city_district" => "Северное Медведково",
                "settlement_fias_id" => null,
                "settlement_kladr_id" => null,
                "settlement_with_type" => null,
                "settlement_type" => null,
                "settlement_type_full" => null,
                "settlement" => null,
                "street_fias_id" => "95dbf7fb-0dd4-4a04-8100-4f6c847564b5",
                "street_kladr_id" => "77000000000283600",
                "street_with_type" => "ул Сухонская",
                "street_type" => "ул",
                "street_type_full" => "улица",
                "street" => "Сухонская",
                "house_fias_id" => "5ee84ac0-eb9a-4b42-b814-2f5f7c27c255",
                "house_kladr_id" => "7700000000028360004",
                "house_type" => "д",
                "house_type_full" => "дом",
                "house" => "11",
                "block_type" => null,
                "block_type_full" => null,
                "block" => null,
                "flat_type" => "кв",
                "flat_type_full" => "квартира",
                "flat" => "89",
                "flat_area" => "34.6",
                "square_meter_price" => "208738",
                "flat_price" => "7222335",
                "postal_box" => null,
                "fias_id" => "5ee84ac0-eb9a-4b42-b814-2f5f7c27c255",
                "fias_code" => "77000000000000028360004",
                "fias_level" => "8",
                "fias_actuality_state" => "0",
                "kladr_id" => "7700000000028360004",
                "capital_marker" => "0",
                "okato" => "45280583000",
                "oktmo" => "45362000",
                "tax_office" => "7715",
                "tax_office_legal" => "7715",
                "timezone" => "UTC+3",
                "geo_lat" => "55.8782557",
                "geo_lon" => "37.65372",
                "beltway_hit" => "IN_MKAD",
                "beltway_distance" => null,
                "qc_geo" => 0,
                "qc_complete" => 0,
                "qc_house" => 2,
                "qc" => 0,
                "unparsed_parts" => null,
                "metro" => [
                    [
                        "distance" => 1.1,
                        "line" => "Калужско-Рижская",
                        "name" => "Бабушкинская",
                    ],
                    [
                        "distance" => 1.2,
                        "line" => "Калужско-Рижская",
                        "name" => "Медведково",
                    ],
                    [
                        "distance" => 2.5,
                        "line" => "Калужско-Рижская",
                        "name" => "Свиблово",
                    ],
                ],
            ]
        ];
    }

}
