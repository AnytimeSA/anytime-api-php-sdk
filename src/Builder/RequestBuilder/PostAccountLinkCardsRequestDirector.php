<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountLinkCards;

class PostAccountLinkCardsRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostAccountLinkCards $modelRequest
     * @return PostAccountLinkCardsRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts/' . $modelRequest->getId() . '/link-cards');
        return $this;
    }
}