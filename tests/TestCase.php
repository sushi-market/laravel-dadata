<?php

namespace SushiMarket\DaData\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app)
    {
        return [
            'SushiMarket\DaData\DaDataServiceProvider'
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'DaDataAddress'    => 'SushiMarket\DaData\Facades\DaDataAddress',
            'DaDataName'       => 'SushiMarket\DaData\Facades\DaDataName',
            'DaDataEmail'      => 'SushiMarket\DaData\Facades\DaDataEmail',
            'DaDataPhone'      => 'SushiMarket\DaData\Facades\DaDataPhone',
            'DaDataCompany'    => 'SushiMarket\DaData\Facades\DaDataCompany',
            'DaDataBank'       => 'SushiMarket\DaData\Facades\DaDataBank',
            'DaDataPassport'   => 'SushiMarket\DaData\Facades\DaDataPassport',
        ];
    }

}
