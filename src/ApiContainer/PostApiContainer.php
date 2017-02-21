<?php

namespace Anytime\ApiClient\ApiContainer;

use Anytime\ApiClient\Constant\Method;

class PostApiContainer extends ApiContainer
{
    /**
     * @return string
     */
    public function getMethod()
    {
        return Method::POST;
    }
}