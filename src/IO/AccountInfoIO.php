<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountInfo;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetAccountInfo;

/**
 * @method ModelResponseGetAccountInfo sendRequest(ModelRequestGetAccountInfo $modelRequest)
 */
class AccountInfoIO extends IO
{
    /**
     * @return ModelRequestGetAccountInfo
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::ACCOUNT_INFO);
    }
}