<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\ModelRequest;

abstract class ModelRequestPost extends ModelRequest
{
    /**
     * @return string
     */
    public function getMethod()
    {
        return Method::POST;
    }
}