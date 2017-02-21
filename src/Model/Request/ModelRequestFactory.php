<?php

namespace Anytime\ApiClient\Model\Request;

use Anytime\ApiClient\Model\Factory\ModelFactory;
use Anytime\ApiClient\Model\Model;

class ModelRequestFactory extends ModelFactory
{
    /**
     * @param $method
     * @param $apiName
     * @return Model
     */
    public function create($method, $apiName)
    {
        return parent::createByModelType('ModelRequest', $method, $apiName);
    }
}