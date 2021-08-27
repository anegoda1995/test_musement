<?php

namespace App\Api;

use stdClass;

interface IApi
{
    public function getWeatherForecast(string $cityName, int $daysCount = 1): stdClass;
}