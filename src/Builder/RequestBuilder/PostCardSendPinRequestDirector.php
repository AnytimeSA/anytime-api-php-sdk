<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardSendPin;

class PostCardSendPinRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostCardSendPin $modelRequest
     * @return PostCardSendPinRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('cards/' . $modelRequest->getCardRef() . '/pin');
        return $this;
    }
}
