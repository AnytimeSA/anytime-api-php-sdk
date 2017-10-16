<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetCardGetPin extends ModelResponseGet
{
    /**
     * @return string
     */
    public function getPictureUrl()
    {
        return (string)$this->getDataValue('picture_url');
    }
}