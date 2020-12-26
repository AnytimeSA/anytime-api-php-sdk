<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostRequestMultiRequest;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostRequestMultiRequest;

/**
 * @method ModelResponsePostRequestMultiRequest sendRequest(ModelRequestPostRequestMultiRequest $modelRequest)
 */
class RequestMultiRequestIO extends IO
{
    /**
     * @return ModelRequestPostRequestMultiRequest
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::REQUEST_MULTI_REQUEST);
    }
}
