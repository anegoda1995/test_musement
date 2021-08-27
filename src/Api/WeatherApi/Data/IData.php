<?php

namespace App\Api\WeatherApi\Data;

use stdClass;

interface IData
{
    public function getSimpleTwoDaysCondition(string $cityName, stdClass $data): string;
}