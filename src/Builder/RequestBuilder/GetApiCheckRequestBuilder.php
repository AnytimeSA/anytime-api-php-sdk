<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequest;
use GuzzleHttp\Psr7\Request;

class GetApiCheckRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest $modelRequest
     * @return Request
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return new Request(
            $this->preBuiltData['method'],
            $this->getFullUrl($this->preBuiltData['uri'])
        );
    }
}