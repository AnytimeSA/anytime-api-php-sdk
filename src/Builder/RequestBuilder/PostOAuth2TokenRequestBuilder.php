<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostOAuth2Token;

class PostOAuth2TokenRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPostOAuth2Token $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri'], false),
            [
                'grant_type'    =>  $modelRequest->getGrantType(),
                'client_id'      =>  $modelRequest->getClientId(),
                'client_secret'  =>  $modelRequest->getClientSecret(),
                'username'      =>  $modelRequest->getUsername(),
                'password'      =>  $modelRequest->getPassword()
            ]
        );
    }
}