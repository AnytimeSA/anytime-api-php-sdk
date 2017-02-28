<?php

namespace Anytime\ApiClient\Model\Populator;

use Anytime\ApiClient\Model\Response\ModelResponse;

interface ModelResponsePopulatorInterface
{
    /**
     * @param ModelResponse $modelObject
     * @param array $data
     * @return ModelResponse
     */
    public function populate(ModelResponse $modelObject, $data);
}