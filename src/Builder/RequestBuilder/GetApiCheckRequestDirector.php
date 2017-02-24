<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetApiCheck;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetApiCheckRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetApiCheck $modelRequest
     * @return GetApiCheckRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('apicheck');
        return $this;
    }
}