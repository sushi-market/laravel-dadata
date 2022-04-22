<?php

namespace SushiMarket\DaData\Enums;

/**
 * Class Gender
 * @package SushiMarket\DaData\Enums
 */
class Gender
{
    const UNKNOWN   = 0;
    const MALE      = 1;
    const FEMALE    = 2;

    public static $map = [
        self::UNKNOWN   => 'UNKNOWN',
        self::MALE      => 'MALE',
        self::FEMALE    => 'FEMALE',
    ];

}
