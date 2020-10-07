<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountCreditTransfer;

class PostAccountCreditTransferRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestPostAccountCreditTransfer $modelRequest
     * @return PostAccountCreditTransferRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts/' . $modelRequest->getId() . '/credit-transfers');
        return $this;
    }
}
