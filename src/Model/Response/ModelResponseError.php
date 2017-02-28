<?php

namespace Anytime\ApiClient\Model\Response;

class ModelResponseError extends ModelResponse
{
    /**
     * @return ModelResponseErrorError
     */
    public function getError()
    {
        return $this->hydrator->hydrate(
            new ModelResponseErrorError(),
            $this->getDataValue('error')
        );
    }

}