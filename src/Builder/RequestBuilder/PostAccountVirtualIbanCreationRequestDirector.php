<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountVirtualIbanCreation;

class PostAccountVirtualIbanCreationRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostAccountVirtualIbanCreation $modelRequest
     * @return PostAccountVirtualIbanCreationRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts/' . $modelRequest->getId() . '/virtual-ibans');
        return $this;
    }
}