<?php

namespace SushiMarket\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataPhone
 * @package SushiMarket\DaData\Facades
 * @method \SushiMarket\DaData\DaDataPhone standardization(string $phone)
 */
class DaDataPhone extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_phone';
    }

}
