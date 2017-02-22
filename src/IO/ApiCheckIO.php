<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetApiCheck;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetApiCheck;

class ApiCheckIO extends IO
{
    /**
     * @return ModelRequestGetApiCheck
     */
    public function createRequest()
    {
        return $this->modelRequestFactory->create(Method::GET, API::APICHECK);
    }

    /**
     * @param ModelRequestInterface $modelRequest
     * @return ModelResponseGetApiCheck
     */
    public function sendRequest(ModelRequestInterface $modelRequest)
    {
        return $this->send($modelRequest);
    }
}