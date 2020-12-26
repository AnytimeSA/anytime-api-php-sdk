<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountKycStatus;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;

class GetAccountKycStatusRequestDirector extends RequestDirector
{
    /**
     * @param ModelRequestInterface|ModelRequestGetAccountKycStatus $modelRequest
     * @return GetAccountKycStatusRequestDirector
     */
    public function buildRequest(ModelRequestInterface $modelRequest)
    {
        $this->requestBuilder->setUri('accounts/'.$modelRequest->getId().'/kyc');
        return $this;
    }
}
