<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountIbanStatement;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetAccountIbanStatementRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetAccountIbanStatement $modelRequest
     * @return GetAccountIbanStatementRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts/' . $modelRequest->getId() . '/iban-statements');
        return $this;
    }
}
