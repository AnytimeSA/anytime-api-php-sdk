<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountBalance;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetAccountBalanceRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetAccountBalance $modelRequest
     * @return GetAccountBalanceRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts/' . $modelRequest->getId() . '/balance');
        return $this;
    }
}