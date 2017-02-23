<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequest;
use GuzzleHttp\Psr7\Request;

abstract class GetRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest $modelRequest
     * @return Request
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri'])
        );
    }
}