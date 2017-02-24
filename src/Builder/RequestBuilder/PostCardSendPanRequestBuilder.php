<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardSendPan;
use GuzzleHttp\Psr7\Request;

class PostCardSendPanRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPostCardSendPan $modelRequest
     * @return Request
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            [
                'dest_method'   =>  $modelRequest->getDestMethod(),
                'dest_value'    =>  $modelRequest->getDestValue()
            ]
        );
    }
}