<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostApiCheckPost;

class PostApiCheckPostRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostApiCheckPost $modelRequest
     * @return PostApiCheckPostRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('apicheck');
        return $this;
    }
}
