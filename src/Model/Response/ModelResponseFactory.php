<?php

namespace Anytime\ApiClient\Model\Response;

use Anytime\ApiClient\DateTime\TimezoneNormalizer\TimezoneNormalizer;
use Anytime\ApiClient\Hydrator\FromSnakeCaseHydrator;
use Anytime\ApiClient\Model\Factory\ModelFactory;
use Anytime\ApiClient\Model\Model;

class ModelResponseFactory extends ModelFactory
{
    /**
     * @param string $method
     * @param string $apiName
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

    /**
     * @return ModelResponseError
     */
    public function createError()
    {
        $timezoneNormalizer = new TimezoneNormalizer();

        return new ModelResponseError(
            new FromSnakeCaseHydrator($timezoneNormalizer),
            $timezoneNormalizer,
            $this->createHeader()
        );
    }
}