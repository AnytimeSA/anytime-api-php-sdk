<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardGetPin;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetCardGetPinRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetCardGetPin $modelRequest
     * @return GetCardGetPinRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('cards' . '/' . $modelRequest->getCardRef() . '/pin');
        return $this;
    }
}
