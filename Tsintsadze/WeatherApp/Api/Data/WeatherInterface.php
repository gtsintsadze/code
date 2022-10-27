<?php

namespace Tsintsadze\WeatherApp\Api\Data;

interface WeatherInterface
{
    public const ID = 'id';
    public const CITY = 'city';
    public const COUNTRY = 'country';
    public const DESCRIPTION = 'description';
    public const TEMPERATURE = 'temperature';
    public const FEELS_LIKE = 'feels_like';
    public const PRESSURE = 'pressure';
    public const HUMIDITY = 'humidity';
    public const WIND_SPEED = 'wind_speed';
    public const SUNRISE = 'sunrise';
    public const SUNSET = 'sunset';
    public const CREATED_AT = 'created_at';

    /**
     * @param $id
     * @return WeatherInterface
     */
    public function getWeatherId($id): WeatherInterface;

    /**
     * @param $createdAt
     * @return WeatherInterface
     */
    public function getCreatedAt($createdAt): WeatherInterface;

    /**
     * @param string $city
     * @return WeatherInterface
     */
    public function setCity(string $city): WeatherInterface;

    /**
     * @param $city
     * @return WeatherInterface
     */
    public function getCity($city): WeatherInterface;

    /**
     * @param string $country
     * @return WeatherInterface
     */
    public function setCountry(string $country): WeatherInterface;

    /**
     * @param $country
     * @return WeatherInterface
     */
    public function getCountry($country): WeatherInterface;

    /**
     * @param string $description
     * @return WeatherInterface
     */
    public function setDescription(string $description): WeatherInterface;

    /**
     * @param $description
     * @return WeatherInterface
     */
    public function getDescription($description): WeatherInterface;

    /**
     * @param float $temperature
     * @return WeatherInterface
     */
    public function setTemperature(float $temperature): WeatherInterface;

    /**
     * @param $temperature
     * @return WeatherInterface
     */
    public function getTemperature($temperature): WeatherInterface;

    /**
     * @param float $feelsLike
     * @return WeatherInterface
     */
    public function setFeelsLike(float $feelsLike): WeatherInterface;

    /**
     * @param $feelsLike
     * @return WeatherInterface
     */
    public function getFeelsLike($feelsLike): WeatherInterface;

    /**
     * @param int $pressure
     * @return WeatherInterface
     */
    public function setPressure(int $pressure): WeatherInterface;

    /**
     * @param $pressure
     * @return WeatherInterface
     */
    public function getPressure($pressure): WeatherInterface;

    /**
     * @param int $humidity
     * @return WeatherInterface
     */
    public function setHumidity(int $humidity): WeatherInterface;

    /**
     * @param $humidity
     * @return WeatherInterface
     */
    public function getHumidity($humidity): WeatherInterface;

    /**
     * @param float $windSpeed
     * @return WeatherInterface
     */
    public function setWindSpeed(float $windSpeed): WeatherInterface;

    /**
     * @param $windSpeed
     * @return WeatherInterface
     */
    public function getWindSpeed($windSpeed): WeatherInterface;

    /**
     * @param string $sunRise
     * @return WeatherInterface
     */
    public function setSunRise(string $sunRise): WeatherInterface;

    /**
     * @param $sunRise
     * @return WeatherInterface
     */
    public function getSunRise($sunRise): WeatherInterface;

    /**
     * @param string $sunSet
     * @return WeatherInterface
     */
    public function setSunSet(string $sunSet): WeatherInterface;

    /**
     * @param $sunSet
     * @return WeatherInterface
     */
    public function getSunSet($sunSet): WeatherInterface;
}
