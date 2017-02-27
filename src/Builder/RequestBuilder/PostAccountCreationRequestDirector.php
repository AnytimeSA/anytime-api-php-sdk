<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountCreation;

class PostAccountCreationRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostAccountCreation $modelRequest
     * @return PostAccountCreationRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts');
        return $this;
    }
}