<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\ModelRequest;

class GetApiCheckRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequest $modelRequest
     * @return \Anytime\ApiClient\RequestSigner\RequestSignerInterface
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->requestBuilder->getSignedRequest($modelRequest);
    }

    /**
     * @return GetApiCheckRequestDirector
     */
    public function buildRequest()
    {
        $this->requestBuilder->setMethod(Method::GET);
        $this->requestBuilder->setUri('apicheck');
        return $this;
    }
}