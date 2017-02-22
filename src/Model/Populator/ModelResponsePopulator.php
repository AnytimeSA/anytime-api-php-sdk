<?php

namespace Anytime\ApiClient\Model\Populator;

use Anytime\ApiClient\Model\Response\ModelResponse;

class ModelResponsePopulator extends Populator implements ModelResponsePopulatorInterface
{
    /**
     * @param ModelResponse $modelObject
     * @param array $data
     * @return ModelResponse
     */
    public function populate(ModelResponse $modelObject, $data)
    {
        if(array_key_exists('body', $data)) {
            $modelObject->setData($data['body']);
        }

        return $modelObject;
    }
}