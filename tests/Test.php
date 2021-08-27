<?php

use App\Api\ApiFactory;
use App\Api\WeatherApi\Data\ConsoleData;
use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test1()
    {
        $dotenv = Dotenv::createUnsafeImmutable(__DIR__ . '/../');
        $dotenv->load();

        $cityName = 'Odessa';

        $apiFactory = new ApiFactory;
        $weatherApi = $apiFactory->createWeatherApi();
        $data = $weatherApi->getWeatherForecast($cityName, 2);
        $consoleData = new ConsoleData;
        $string = $consoleData->getSimpleTwoDaysCondition($cityName, $data);
        print_r($string . "\n");
        die;
    }
}
