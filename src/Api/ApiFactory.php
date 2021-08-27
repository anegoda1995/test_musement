<?php

namespace App\Api;

use App\Api\WeatherApi\WeatherApi;

class ApiFactory
{
    protected WeatherApi $weatherApi;

    public function createWeatherApi(): WeatherApi
    {
        if (empty($this->weatherApi)) {
            $this->weatherApi = new WeatherApi;
        }

        return $this->weatherApi;
    }
}