<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountStatement;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetAccountStatement;

/**
 * @method ModelResponseGetAccountStatement sendRequest(ModelRequestGetAccountStatement $modelRequest)
 */
class AccountStatementIO extends IO
{
    /**
     * @return ModelRequestGetAccountStatement
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::ACCOUNT_STATEMENT);
    }
}
