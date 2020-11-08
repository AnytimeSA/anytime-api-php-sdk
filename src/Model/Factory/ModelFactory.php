<?php

namespace Anytime\ApiClient\Model\Factory;

use Anytime\ApiClient\DateTime\TimezoneNormalizer\TimezoneNormalizer;
use Anytime\ApiClient\Hydrator\FromSnakeCaseHydrator;
use Anytime\ApiClient\Model\Model;
use Anytime\ApiClient\Model\Request\ModelRequest;

abstract class ModelFactory
{
    /**
     * @var ModelRequest
     */
    protected $modelRequest;

    /**
     * @param string $modelType
     * @param string $method
     * @param string $apiName
     * @return Model
     */
    public function createByModelType($modelType, $method, $apiName)
    {
        $class = sprintf(
            'Anytime\\ApiClient\\Model\\%s\\%s\\%s%s%s',
            $modelType === 'ModelResponse' ? 'Response' : 'Request',
            ucfirst(strtolower($method)),
            $modelType,
            ucfirst(strtolower($method)),
            $apiName
        );

        if (!class_exists($class)) {
            throw new \RuntimeException('Class '.$class.' not found');
        }

        $timezoneNormalizer = new TimezoneNormalizer();
        
        if ($modelType === 'ModelResponse') {
            return new $class(
                new FromSnakeCaseHydrator($timezoneNormalizer),
                $timezoneNormalizer,
                $this->createHeader(),
                $this,
                $this->modelRequest
            );
        }

        return new $class($timezoneNormalizer);
    }
}
