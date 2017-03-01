<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;

class NullGetRequestBuilder extends GetRequestBuilder
{
    /**
     * @param ModelRequest $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createIORequestObject(Method::GET, 'null/uri');
    }
}