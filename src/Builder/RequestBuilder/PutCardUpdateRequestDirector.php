<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Put\ModelRequestPutCardUpdate;

class PutCardUpdateRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPutCardUpdate $modelRequest
     * @return PutCardUpdateRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('cards/' . $modelRequest->getCardRef());
        return $this;
    }
}
