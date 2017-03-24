<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardInfo;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetCardGetPanRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetCardInfo $modelRequest
     * @return GetCardGetPanRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('cards' . '/' . $modelRequest->getCardRef() . '/pan');
        return $this;
    }
}