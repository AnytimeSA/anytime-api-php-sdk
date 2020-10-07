<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetAccountCreditTransferListRequestDirector extends RequestDirector
{
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts/' . $modelRequest->getAccountId() . '/credit-transfers');
        return $this;
    }
}
