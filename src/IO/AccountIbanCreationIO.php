<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountIbanCreation;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostAccountIbanCreation;

/**
 * @method ModelResponsePostAccountIbanCreation sendRequest(ModelRequestPostAccountIbanCreation $modelRequest)
 */
class AccountIbanCreationIO extends IO
{
    /**
     * @return ModelRequestPostAccountIbanCreation
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::ACCOUNT_IBAN_CREATION);
    }
}
