<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountIbanStatement;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetAccountIbanStatement;
/**
 * @method ModelResponseGetAccountIbanStatement sendRequest(ModelRequestGetAccountIbanStatement $modelRequest)
 */
class AccountIbanStatementIO extends IO
{
    /**
     * @return ModelRequestGetAccountIbanStatement
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::ACCOUNT_IBAN_STATEMENT);
    }
}