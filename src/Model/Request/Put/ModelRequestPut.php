<?php

namespace Anytime\ApiClient\Model\Request\Put;

use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\ModelRequest;

abstract class ModelRequestPut extends ModelRequest
{
    /**
     * @return string
     */
    public function getMethod()
    {
        return Method::PUT;
    }
}