<?php

namespace Anytime\ApiClient\Model\Response;

use Anytime\ApiClient\Model\Factory\ModelFactory;
use Anytime\ApiClient\Model\Model;

class ModelResponseFactory extends ModelFactory
{
    /**
     * @param $method
     * @param $apiName
     * @return Model
     */
    public function create($method, $apiName)
    {
        return parent::createByModelType('ModelResponse', $method, $apiName);
    }

    /**
     * @return ModelResponseHeader
     */
    public function createHeader()
    {
        return new ModelResponseHeader();
    }
}