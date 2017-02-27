<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Put\ModelRequestPutAccountUpdate;

class PutAccountUpdateRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPutAccountUpdate $modelRequest
     * @return PutAccountUpdateRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts/' . $modelRequest->getId());
        return $this;
    }
}