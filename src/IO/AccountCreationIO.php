<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountCreation;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostAccountCreation;

/**
 * @method ModelResponsePostAccountCreation sendRequest(ModelRequestPostAccountCreation $modelRequest)
 */
class AccountCreationIO extends IO
{
    /**
     * @return ModelRequestPostAccountCreation
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::ACCOUNT_CREATION);
    }
}
