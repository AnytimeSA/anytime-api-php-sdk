<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetCardGetPin extends ModelResponseGet
{
    /**
     * @return string
     */
    public function getPinUrl()
    {
        return (string)$this->getDataValue('pin_url');
    }
}