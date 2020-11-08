<?php

namespace Anytime\ApiClient\Model\Request;

use Anytime\ApiClient\Model\Factory\ModelFactory;
use Anytime\ApiClient\Model\Model;

class ModelRequestFactory extends ModelFactory
{
    /**
     * @param string $method
     * @param string $apiName
     * @return Model
     */
    public function create($method, $apiName)
    {
        return parent::createByModelType('ModelRequest', $method, $apiName);
    }
}