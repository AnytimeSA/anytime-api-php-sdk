<?php

namespace Anytime\ApiClient\Model\Response;

use Anytime\ApiClient\DateTime\TimezoneNormalizer\TimezoneNormalizer;
use Anytime\ApiClient\Hydrator\FromSnakeCaseHydrator;
use Anytime\ApiClient\Model\Factory\ModelFactory;
use Anytime\ApiClient\Model\Model;
use Anytime\ApiClient\Model\Populator\ModelResponsePopulator;
use Anytime\ApiClient\Model\Request\ModelRequest;

class ModelResponseFactory extends ModelFactory
{
    /**
     * @var ModelResponsePopulator
     */
    protected $modelResponsePopulator;

    /**
     * ModelResponseFactory constructor.
     * @param ModelResponsePopulator $modelResponsePopulator
     */
    public function __construct(ModelResponsePopulator $modelResponsePopulator)
    {
        $this->modelResponsePopulator = $modelResponsePopulator;
    }

    /**
     * @param ModelRequest $modelRequest
     * @return Model
     */
    public function create(ModelRequest $modelRequest)
    {
        $this->modelRequest = $modelRequest;
        return parent::createByModelType(
            'ModelResponse',
            $modelRequest->getMethod(),
            $modelRequest->getApiName()
        );
    }

    /**
     * @return ModelResponseHeader
     */
    public function createHeader()
    {
        return new ModelResponseHeader();
    }

    /**
     * @param ModelRequest $modelRequest
     * @return ModelResponseError
     */
    public function createError(ModelRequest $modelRequest)
    {
        $timezoneNormalizer = new TimezoneNormalizer();

        return new ModelResponseError(
            new FromSnakeCaseHydrator($timezoneNormalizer),
            $timezoneNormalizer,
            $this->createHeader(),
            $this,
            $modelRequest
        );
    }

    /**
     * @return ModelResponsePopulator
     */
    public function getModelResponsePopulator()
    {
        return $this->modelResponsePopulator;
    }
}