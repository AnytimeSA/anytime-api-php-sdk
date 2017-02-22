<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetApiCheckRequestDirector extends RequestDirector
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
     * @return GetApiCheckRequestDirector
     */
    public function buildRequest()
    {
        $this->requestBuilder->setUri('apicheck');
        return $this;
    }
}