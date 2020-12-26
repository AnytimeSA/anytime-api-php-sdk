<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardCredit;

class PostCardCreditRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostCardCredit $modelRequest
     * @return PostCardCreditRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('cards/' . $modelRequest->getCardRef() . '/credit');
        return $this;
    }
}
