<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountCreditTransferList;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountIbanStatement;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetAccountCreditTransferList;

/**
 * @method ModelResponseGetAccountCreditTransferList sendRequest(ModelRequestGetAccountIbanStatement $modelRequest)
 */
class AccountCreditTransferListIO extends IO
{
    /**
     * @return ModelRequestGetAccountCreditTransferList
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::ACCOUNT_CREDIT_TRANSFER_LIST);
    }
}
