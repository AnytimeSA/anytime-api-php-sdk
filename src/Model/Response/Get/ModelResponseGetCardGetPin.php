<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetCardGetPin extends ModelResponseGet
{
    /**
     * @return string
     */
    public function getPin()
    {
        return (string)$this->getDataValue('pin');
    }
}