<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountInfo;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetAccountInfoRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetAccountInfo $modelRequest
     * @return GetAccountInfoRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts/' . $modelRequest->getId());
        return $this;
    }
}