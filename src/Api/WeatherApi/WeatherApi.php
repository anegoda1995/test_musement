<?php

namespace App\Api\WeatherApi;

use App\Api\IApi;
use stdClass;

class WeatherApi implements IApi
{
    public function getWeatherForecast(string $cityName, int $daysCount = 1): stdClass
    {
        $weatherApiSecret = getenv('WEATHER_API_SECRET');
        if (empty($weatherApiSecret)) {
            print_r('Secret key for API not exist');
            return new stdClass;
        }

        $responseString = file_get_contents("https://api.weatherapi.com/v1/forecast.json?key=$weatherApiSecret&q=$cityName&days=$daysCount");
        $responseObj = json_decode($responseString);

        if (json_last_error() !== JSON_ERROR_NONE) {
            print_r('Response is incorrect');
            return new stdClass;
        }

        return $responseObj;
    }
}