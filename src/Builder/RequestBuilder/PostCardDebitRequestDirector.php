<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardDebit;

class PostCardDebitRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostCardDebit $modelRequest
     * @return PostCardDebitRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('cards/' . $modelRequest->getCardRef() . '/debit');
        return $this;
    }
}