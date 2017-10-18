<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardTransactionDetails;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetCardTransactionDetailsRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetCardTransactionDetails $modelRequest
     * @return GetCardTransactionDetailsRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('cards/' . $modelRequest->getCardRef() . '/transactions/' . $modelRequest->getTransactionId());
        return $this;
    }
}