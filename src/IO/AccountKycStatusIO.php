<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountKycStatus;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetAccountKycStatus;

/**
 * @method ModelResponseGetAccountKycStatus sendRequest(ModelRequestGetAccountKycStatus $modelRequest)
 */
class AccountKycStatusIO extends IO
{
    /**
     * @return ModelRequestGetAccountKycStatus
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::ACCOUNT_KYC_STATUS);
    }
}
