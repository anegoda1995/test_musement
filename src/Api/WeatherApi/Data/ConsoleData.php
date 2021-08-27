<?php

namespace App\Api\WeatherApi\Data;

use App\Api\WeatherApi\Parser;
use Carbon\Carbon;
use stdClass;

class ConsoleData implements IData
{
    public function getSimpleTwoDaysCondition(string $cityName, stdClass $data): string
    {
        $parser = new Parser;
        $todayCondition = $parser->getConditionByDate($data, Carbon::now());
        $tomorrowCondition = $parser->getConditionByDate($data, Carbon::now()->addDay());

        $result = "Processed city $cityName | $todayCondition - $tomorrowCondition";

        return $result;
    }
}