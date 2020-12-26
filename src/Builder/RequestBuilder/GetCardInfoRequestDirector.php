<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardInfo;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetCardInfoRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetCardInfo $modelRequest
     * @return GetCardInfoRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('cards' . '/' . $modelRequest->getCardRef());
        return $this;
    }
}
