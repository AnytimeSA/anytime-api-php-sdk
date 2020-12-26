<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountVirtualIbanCreation;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostAccountVirtualIbanCreation;

/**
 * @method ModelResponsePostAccountVirtualIbanCreation sendRequest(ModelRequestPostAccountVirtualIbanCreation $modelRequest)
 */
class AccountVirtualIbanCreationIO extends IO
{
    /**
     * @return ModelRequestPostAccountVirtualIbanCreation
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::ACCOUNT_VIRTUAL_IBAN_CREATION);
    }
}
