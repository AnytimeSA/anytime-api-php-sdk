<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountBalance;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetAccountBalance;

/**
 * @method ModelResponseGetAccountBalance sendRequest(ModelRequestGetAccountBalance $modelRequest)
 */
class AccountBalanceIO extends IO
{
    /**
     * @return ModelRequestGetAccountBalance
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::ACCOUNT_BALANCE);
    }
}
