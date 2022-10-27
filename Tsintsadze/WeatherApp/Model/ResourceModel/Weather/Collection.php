<?php

namespace Tsintsadze\WeatherApp\Model\ResourceModel\Weather;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Tsintsadze\WeatherApp\Model\Weather;
use Tsintsadze\WeatherApp\Model\ResourceModel\Weather as WeatherResource;


class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Weather::class, WeatherResource::class);
    }
}
