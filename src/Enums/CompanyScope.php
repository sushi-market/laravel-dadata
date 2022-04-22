<?php

namespace SushiMarket\DaData\Enums;

/**
 * Class CompanyScope
 * @package SushiMarket\DaData\Enums
 */
class CompanyScope
{

    const FOUNDERS = 1;
    const MANAGERS = 2;

    /**
     * @var string[]
     */
    public static $map  = [
        self::FOUNDERS => 'FOUNDERS',
        self::MANAGERS => 'MANAGERS',
    ];

}
