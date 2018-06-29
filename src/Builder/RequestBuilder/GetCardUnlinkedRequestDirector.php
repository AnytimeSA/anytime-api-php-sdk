<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardUnlinked;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetCardUnlinkedRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetCardUnlinked $modelRequest
     * @return GetCardUnlinkedRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('cards' . '/unlinked');
        return $this;
    }
}