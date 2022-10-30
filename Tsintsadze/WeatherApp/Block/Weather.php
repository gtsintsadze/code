<?php

namespace Tsintsadze\WeatherApp\Block;

use Magento\Framework\View\Element\Template;
use Tsintsadze\WeatherApp\Api\Data\WeatherInterface;
use Tsintsadze\WeatherApp\Model\ResourceModel\Weather as WeatherResource;
use Tsintsadze\WeatherApp\Model\ResourceModel\Weather\Collection;
use Tsintsadze\WeatherApp\Model\ResourceModel\Weather\CollectionFactory;
use Tsintsadze\WeatherApp\Model\Url;
use Magento\Framework\App\Request\DataPersistorInterface;


class Weather extends Template
{
    protected CollectionFactory $weatherFactory;

    protected DataPersistorInterface $dataPersistor;

    protected WeatherResource $weatherResource;

    protected Url $url;

    public function __construct(
        Template\Context $context,
        CollectionFactory $weatherFactory,
        WeatherResource $weatherResource,
        DataPersistorInterface $dataPersistor,
        Url $url,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->weatherFactory = $weatherFactory;
        $this->weatherResource = $weatherResource;
        $this->dataPersistor = $dataPersistor;
        $this->url = $url;
    }

    private function getDataPersistorItem($key)
    {
        $value = $this->dataPersistor->get($key);

        if ($value) {
            $this->dataPersistor->clear($key);

            return $value;
        }

        return null;
    }

    public function getCountry()
    {
        return $this->getDataPersistorItem(WeatherInterface::COUNTRY);
    }

    /**
     * @return mixed|null
     */
    public function getSunRise()
    {
        return $this->getDataPersistorItem(WeatherInterface::SUNRISE);
    }

    /**
     * @return mixed|null
     */
    public function getSunSet()
    {
        return $this->getDataPersistorItem(WeatherInterface::SUNSET);
    }

    /**
     * @return mixed|null
     */
    public function getTemperature()
    {
        return $this->getDataPersistorItem(WeatherInterface::TEMPERATURE);
    }

    /**
     * @return mixed|null
     */
    public function getFeelsLike()
    {
        return $this->getDataPersistorItem(WeatherInterface::FEELS_LIKE);
    }

    /**
     * @return mixed|null
     */
    public function getPressure()
    {
        return $this->getDataPersistorItem(WeatherInterface::PRESSURE);
    }

    /**
     * @return mixed|null
     */
    public function getHumidity()
    {
        return $this->getDataPersistorItem(WeatherInterface::HUMIDITY);
    }

    /**
     * @return mixed|null
     */
    public function getWindSpeed()
    {
        return $this->getDataPersistorItem(WeatherInterface::WIND_SPEED);
    }

    /**
     * @return mixed|null
     */
    public function getCity()
    {
        return $this->getDataPersistorItem(WeatherInterface::CITY);
    }

    /**
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->getDataPersistorItem(WeatherInterface::DESCRIPTION);
    }

    public function getWeatherData(): Collection
    {
        return $this->weatherFactory->create();
    }

    public function getTable(): ?array
    {
        return $this->weatherResource->getFields();
    }

    public function getPostUrl(): string
    {
        return $this->url->getWeatherUrl();
    }
}