<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountStatementDetails;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetAccountStatementDetailsRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetAccountStatementDetails $modelRequest
     * @return GetAccountStatementDetailsRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts/' . $modelRequest->getId() . '/statements/' . $modelRequest->getId() . '-' . $modelRequest->getTxid());
        return $this;
    }
}