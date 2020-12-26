<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\ModelRequest;

abstract class ModelRequestGet extends ModelRequest
{
    /**
     * @return string
     */
    public function getMethod()
    {
        return Method::GET;
    }
}
