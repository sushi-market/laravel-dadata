<?php

namespace SushiMarket\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataBank
 * @package SushiMarket\DaData\Facades
 * @method \SushiMarket\DaData\DaDataBank id(string $bank)
 * @method \SushiMarket\DaData\DaDataBank prompt(string $company, int $coun, array $status, array $type, string $locations, string $locations_boost)
 */
class DaDataBank extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_bank';
    }

}
