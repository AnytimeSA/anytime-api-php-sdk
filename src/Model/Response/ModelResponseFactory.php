<?php

namespace Anytime\ApiClient\Model\Response;

use Anytime\ApiClient\Model\Factory\ModelFactory;

class ModelResponseFactory extends ModelFactory
{
    public function create($method, $apiName)
    {
        return parent::createByModelType('ModelResponse', $method, $apiName);
    }
}