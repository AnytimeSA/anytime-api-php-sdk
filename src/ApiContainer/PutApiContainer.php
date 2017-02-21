<?php

namespace Anytime\ApiClient\ApiContainer;

use Anytime\ApiClient\Constant\Method;

class PutApiContainer extends ApiContainer
{
    /**
     * @return string
     */
    public function getMethod()
    {
        return Method::PUT;
    }
}