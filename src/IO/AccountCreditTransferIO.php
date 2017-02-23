<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountCreditTransfer;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostAccountCreditTransfer;

/**
 * @method ModelResponsePostAccountCreditTransfer sendRequest(ModelRequestPostAccountCreditTransfer $modelRequest)
 */
class AccountCreditTransferIO extends IO
{
    /**
     * @return ModelRequestPostAccountCreditTransfer
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::ACCOUNT_CREDIT_TRANSFER);
    }
}