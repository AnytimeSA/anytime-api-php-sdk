<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountIbanCreation;

class PostAccountIbanCreationRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostAccountIbanCreation $modelRequest
     * @return PostAccountIbanCreationRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts/' . $modelRequest->getId() . '/iban');
        return $this;
    }
}