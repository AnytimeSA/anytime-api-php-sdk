<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;

class NullPostRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createIORequestObject(Method::POST, 'null/uri', ['null-param' => 'null-value']);
    }
}
