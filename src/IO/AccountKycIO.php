<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountKyc;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostAccountKyc;

/**
 * @method ModelResponsePostAccountKyc sendRequest(ModelRequestPostAccountKyc $modelRequest)
 */
class AccountKycIO extends IO
{
    /**
     * @return ModelRequestPostAccountKyc
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::ACCOUNT_KYC);
    }
}