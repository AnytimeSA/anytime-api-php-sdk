<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardSendPan;

class PostCardSendPanRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostCardSendPan $modelRequest
     * @return PostCardSendPanRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('cards/' . $modelRequest->getCardRef() . '/pan');
        return $this;
    }
}