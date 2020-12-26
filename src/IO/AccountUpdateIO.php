<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Put\ModelRequestPutAccountUpdate;
use Anytime\ApiClient\Model\Response\Put\ModelResponsePutAccountUpdate;

/**
 * @method ModelResponsePutAccountUpdate sendRequest(ModelRequestPutAccountUpdate $modelRequest)
 */
class AccountUpdateIO extends IO
{
    /**
     * @return ModelRequestPutAccountUpdate
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::PUT, API::ACCOUNT_UPDATE);
    }
}
