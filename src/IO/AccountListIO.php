<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountList;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetAccountList;

/**
 * @method ModelResponseGetAccountList sendRequest(ModelRequestGetAccountList $modelRequest)
 */
class AccountListIO extends IO
{
    /**
     * @return ModelRequestGetAccountList
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::ACCOUNT_LIST);
    }
}