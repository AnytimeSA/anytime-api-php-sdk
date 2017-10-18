<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountIbanCreation;

class PostAccountIbanCreationRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPostAccountIbanCreation $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        $data = [
            'country_code'          =>  $modelRequest->getCountryCode()
        ];

        return $this->createIORequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            $this->filterNullParams($data)
        );
    }
}