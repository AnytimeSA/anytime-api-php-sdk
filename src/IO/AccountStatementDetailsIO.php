<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountStatementDetails;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetAccountStatementDetails;

/**
 * @method ModelResponseGetAccountStatementDetails sendRequest(ModelRequestGetAccountStatementDetails $modelRequest)
 */
class AccountStatementDetailsIO extends IO
{
    /**
     * @return ModelRequestGetAccountStatementDetails
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::ACCOUNT_STATEMENT_DETAILS);
    }
}
