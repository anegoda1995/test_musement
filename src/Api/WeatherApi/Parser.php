<?php

namespace App\Api\WeatherApi;

use App\Api\IApi;
use Carbon\Carbon;
use stdClass;

class Parser
{
    public function getConditionByDate(stdClass $apiResponse, Carbon $date): string
    {
        $days = $apiResponse->forecast->forecastday;
        if (empty($days)) {
            return 'nothing founded';
        }

        foreach ($days as $dayStd) {
            $dateString = $date->format('Y-m-d');
            if ($dateString === $dayStd->date) {
                return $dayStd->day->condition->text;
            }
        }

        return 'nothing founded';
    }
}