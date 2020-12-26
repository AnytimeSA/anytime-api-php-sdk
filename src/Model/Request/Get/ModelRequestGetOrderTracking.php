<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetOrderTracking extends ModelRequestGet
{
    /**
     * @var integer
     */
    private $orderId;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ORDER_TRACKING;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return ModelRequestGetOrderTracking
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
}
