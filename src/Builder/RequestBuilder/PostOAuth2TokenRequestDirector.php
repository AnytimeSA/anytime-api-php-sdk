<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostOAuth2Token;

class PostOAuth2TokenRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostOAuth2Token $modelRequest
     * @return PostOAuth2TokenRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('oauth/v2/token');
        return $this;
    }
}
