<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetOrderTracking;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetOrderTracking;

/**
 * @method ModelResponseGetOrderTracking sendRequest(ModelRequestGetOrderTracking $modelRequest)
 */
class OrderTrackingIO extends IO
{
    /**
     * @return ModelRequestGetOrderTracking
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::ORDER_TRACKING);
    }
}
