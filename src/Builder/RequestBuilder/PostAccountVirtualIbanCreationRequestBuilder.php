<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountVirtualIbanCreation;

class PostAccountVirtualIbanCreationRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPostAccountVirtualIbanCreation $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createIORequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            $this->filterNullParams([
                'type'      =>  $modelRequest->getType()
            ])
        );
    }
}
