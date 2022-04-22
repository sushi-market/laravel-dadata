<?php

namespace SushiMarket\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataName
 * @package SushiMarket\DaData\Facades
 * @method \SushiMarket\DaData\DaDataName standardization(string $name)
 * @method \SushiMarket\DaData\DaDataName prompt(string $name, int $count, int $gender, array $parts)
 */
class DaDataName extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_name';
    }

}
