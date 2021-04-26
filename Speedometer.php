<?php

class Speedometer
{

    public const KM_TO_MILES = 0.621;

    public static function convertKmToMiles(float $kilometres): float
    {
        return $kilometres*self::KM_TO_MILES;
    }

    public static function convertMilesToKm(float $miles): float
    {
        return $miles/self::KM_TO_MILES;
    }
}
var_dump(Speedometer::convertKmToMiles(10));
var_dump(Speedometer::convertMilesToKm(0.621));
