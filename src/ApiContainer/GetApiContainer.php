<?php

namespace Anytime\ApiClient\ApiContainer;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetApiCheck;

class GetApiContainer extends ApiContainer
{
    /**
     * @return string
     */
    public function getMethod()
    {
        return Method::GET;
    }

    /**
     * @return ModelRequestGetApiCheck
     */
    public function apicheck()
    {
        return $this->modelRequestFactory->create($this->getMethod(), API::APICHECK);
    }
}