<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostRequestMultiRequest;

class PostRequestMultiRequestRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostRequestMultiRequest $modelRequest
     * @return PostRequestMultiRequestRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('multi-request');
        return $this;
    }
}