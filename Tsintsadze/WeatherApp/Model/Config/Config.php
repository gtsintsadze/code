<?php

namespace Tsintsadze\WeatherApp\Model\Config;

class Config
{

    public function getApiKey() : string
    {
        return '';
    }

    public function getApiUrl() : string
    {
        return 'https://api.openweathermap.org/data/2.5';
    }
}
