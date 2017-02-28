<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardSendPan;

class PostCardSendPanRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPostCardSendPan $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            $this->filterNullParams([
                'dest_method'   =>  $modelRequest->getDestMethod(),
                'dest_value'    =>  $modelRequest->getDestValue()
            ])
        );
    }
}