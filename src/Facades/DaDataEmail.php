<?php

namespace SushiMarket\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataEmail
 * @package SushiMarket\DaData\Facades
 * @method \SushiMarket\DaData\DaDataEmail standardization(string $email)
 * @method \SushiMarket\DaData\DaDataEmail prompt(string $email, int $count)
 */
class DaDataEmail extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_email';
    }

}
