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
            'Anytime\\ApiClient\\Model\\Request\\' .
            ucfirst(strtolower($method)) . '\\' .
            $modelType . ucfirst(strtolower($method)) .
            $apiName
        ;

        if(class_exists($class)) {
            return new $class(new TimezoneNormalizer());
        }

        throw new \RuntimeException('Class '.$class.' not found');
    }
}