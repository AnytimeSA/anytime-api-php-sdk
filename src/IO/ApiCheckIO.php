<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetApiCheck;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetApiCheck;

/**
 * @method ModelResponseGetApiCheck sendRequest(ModelRequestGetApiCheck $modelRequest)
 */
class ApiCheckIO extends IO
{
    /**
     * @return ModelRequestGetApiCheck
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::APICHECK);
    }
}