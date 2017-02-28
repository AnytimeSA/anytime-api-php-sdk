<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardDetailsDisplay;

class PostCardDetailsDisplayRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPostCardDetailsDisplay $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            $this->filterNullParams([
                'ip'   =>  $modelRequest->getIp()
            ])
        );
    }
}