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
        if($modelObject->getResponseFormat() === 'binary') {
            $modelObject->setData($data);
        } else {
            if(array_key_exists('body', $data)) {
                $modelObject->setData($data['body']);

                $modelObject->getHeader()->setHash(array_key_exists('hash', $data) ? $data['hash'] : []);
                $modelObject->getHeader()->setRequestId(array_key_exists('request_id', $data) ? $data['request_id'] : []);
                $modelObject->getHeader()->setTimestamp(array_key_exists('timestamp', $data) ? $data['timestamp'] : []);
                $modelObject->getHeader()->setTypeResponse(array_key_exists('type_response', $data) ? $data['type_response'] : []);
            }
        }

        return $modelObject;
    }
}
