<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardDetailsDisplay;

class PostCardDetailsDisplayRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostCardDetailsDisplay $modelRequest
     * @return PostCardDetailsDisplayRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('cards/' . $modelRequest->getCardRef() . '/details-display');
        return $this;
    }
}
