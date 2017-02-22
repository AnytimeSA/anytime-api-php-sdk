<?php

namespace Anytime\ApiClient\Model\Factory;

use Anytime\ApiClient\DateTime\TimezoneNormalizer\TimezoneNormalizer;
use Anytime\ApiClient\Model\Model;

abstract class ModelFactory
{
    /**
     * @param string $modelType
     * @param string $method
     * @param string $apiName
     * @return Model
     */
    public function createByModelType($modelType, $method, $apiName)
    {
        $class =
            'Anytime\\ApiClient\\Model\\'.($modelType === 'ModelResponse' ? 'Response' : 'Request').'\\' .
            ucfirst(strtolower($method)) . '\\' .
            $modelType . ucfirst(strtolower($method)) .
            $apiName
        ;

        if(class_exists($class)) {
            if($modelType === 'ModelResponse') {
                return new $class(new TimezoneNormalizer(), $this->createHeader());
            } else {
                return new $class(new TimezoneNormalizer());
            }
        }

        throw new \RuntimeException('Class '.$class.' not found');
    }
}