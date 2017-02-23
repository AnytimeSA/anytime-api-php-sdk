<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class PostApiCheckPostRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface $modelRequest
     * @return \Anytime\ApiClient\RequestSigner\RequestSignerInterface
     */
    public function getRequest(ModelRequestInterface $modelRequest)
    {
        return $this->requestBuilder->getSignedRequest($modelRequest);
    }

    /**
     * @param ModelRequestInterface $modelRequest
     * @return PostApiCheckPostRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('apicheck');
        return $this;
    }
}