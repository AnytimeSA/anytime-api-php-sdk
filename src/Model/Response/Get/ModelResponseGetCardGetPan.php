<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetCardGetPan extends ModelResponseGet
{
    /**
     * @return string
     */
    public function getBack()
    {
        return (string)$this->getDataValue('back');
    }

    /**
     * @return string
     */
    public function getFront()
    {
        return (string)$this->getDataValue('front');
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->timezoneNormalizer->normalize($this->getDataValue('expiry_date'));
    }

    /**
     * @return string
     */
    public function getPan()
    {
        return (string)$this->getDataValue('pan');
    }

    /**
     * @return string
     */
    public function getCvv()
    {
        return (string)$this->getDataValue('cvv');
    }
}