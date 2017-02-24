<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardTransaction;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetCardTransactionRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetCardTransaction $modelRequest
     * @return GetCardTransactionRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('cards/' . $modelRequest->getCardRef() . '/transactions');
        return $this;
    }
}