<?php

namespace Tsintsadze\WeatherApp\Model;

use Magento\Framework\Model\AbstractModel;
use Tsintsadze\WeatherApp\Api\Data\WeatherInterface;

class Weather extends AbstractModel implements WeatherInterface
{
    protected function _construct()
    {
        $this->_init('Tsintsadze\WeatherApp\Model\ResourceModel\Weather');
    }

    /**
     * @param $id
     * @return WeatherInterface
     */
    public function getWeatherId($id): WeatherInterface
    {
        return $this->getData(self::ID);
    }

    /**
     * @param $createdAt
     * @return WeatherInterface
     */
    public function getCreatedAt($createdAt): WeatherInterface
    {
        return $this->getData(self::CREATED_AT);
    }
    /**
     * @param string $city
     * @return WeatherInterface
     */
    public function setCity(string $city): WeatherInterface
    {
        return $this->setData("city", $city);
    }

    /**
     * @param $city
     * @return WeatherInterface
     */
    public function getCity($city): WeatherInterface
    {
        return $this->getData(self::CITY);
    }

    /**
     * @param string $country
     * @return WeatherInterface
     */
    public function setCountry(string $country): WeatherInterface
    {
        return $this->setData("country", $country);
    }

    /**
     * @param $country
     * @return WeatherInterface
     */
    public function getCountry($country): WeatherInterface
    {
        return $this->getData(self::COUNTRY);
    }

    /**
     * @param string $description
     * @return WeatherInterface
     */
    public function setDescription(string $description): WeatherInterface
    {
        return $this->setData("description", $description);
    }

    /**
     * @param $description
     * @return WeatherInterface
     */
    public function getDescription($description): WeatherInterface
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * @param float $temperature
     * @return WeatherInterface
     */
    public function setTemperature(float $temperature): WeatherInterface
    {
        return $this->setData('temperature', $temperature);
    }

    /**
     * @param $temperature
     * @return WeatherInterface
     */
    public function getTemperature($temperature): WeatherInterface
    {
        return $this->getData(self::TEMPERATURE);
    }

    /**
     * @param float $feelsLike
     * @return WeatherInterface
     */
    public function setFeelsLike(float $feelsLike): WeatherInterface
    {
        return $this->setData("feels_like", $feelsLike);
    }

    /**
     * @param $feelsLike
     * @return WeatherInterface
     */
    public function getFeelsLike($feelsLike): WeatherInterface
    {
        return $this->getData(self::FEELS_LIKE);
    }

    /**
     * @param int $pressure
     * @return WeatherInterface
     */
    public function setPressure(int $pressure): WeatherInterface
    {
        return $this->setData("pressure", $pressure);
    }

    /**
     * @param $pressure
     * @return WeatherInterface
     */
    public function getPressure($pressure): WeatherInterface
    {
        return $this->getData(self::PRESSURE);
    }

    /**
     * @param int $humidity
     * @return WeatherInterface
     */
    public function setHumidity(int $humidity): WeatherInterface
    {
        return $this->setData('humidity', $humidity);
    }

    /**
     * @param $humidity
     * @return WeatherInterface
     */
    public function getHumidity($humidity): WeatherInterface
    {
        return $this->getData(self::HUMIDITY);
    }

    /**
     * @param float $windSpeed
     * @return WeatherInterface
     */
    public function setWindSpeed(float $windSpeed): WeatherInterface
    {
        return $this->setData('wind_speed', $windSpeed);
    }

    /**
     * @param $windSpeed
     * @return WeatherInterface
     */
    public function getWindSpeed($windSpeed): WeatherInterface
    {
        return $this->getData(self::WIND_SPEED);
    }

    /**
     * @param string $sunRise
     * @return WeatherInterface
     */
    public function setSunRise(string $sunRise): WeatherInterface
    {
        return $this->setData('sun_rise', $sunRise);
    }

    /**
     * @param $sunRise
     * @return WeatherInterface
     */
    public function getSunRise($sunRise): WeatherInterface
    {
        return $this->getData(self::SUNRISE);
    }

    /**
     * @param string $sunSet
     * @return WeatherInterface
     */
    public function setSunSet(string $sunSet): WeatherInterface
    {
        return $this->setData('sun_set', $sunSet);
    }

    /**
     * @param $sunSet
     * @return WeatherInterface
     */
    public function getSunSet($sunSet): WeatherInterface
    {
        return $this->getData(self::SUNSET);
    }
}
