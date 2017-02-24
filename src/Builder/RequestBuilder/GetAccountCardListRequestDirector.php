<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountCardList;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetAccountCardListRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetAccountCardList $modelRequest
     * @return GetAccountCardListRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts/' . $modelRequest->getId() . '/cards');
        return $this;
    }
}