<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetOrderTracking;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetOrderTrackingRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetOrderTracking $modelRequest
     * @return GetOrderTrackingRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('orders' . '/' . $modelRequest->getOrderId() . '/tracking');
        return $this;
    }
}
