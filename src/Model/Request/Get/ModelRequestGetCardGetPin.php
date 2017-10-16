<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetCardGetPin extends ModelRequestGet
{
    /**
     * @var string
     */
    private $cardRef;

    /**
     * @var string
     */
    private $cvc;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::CARD_GET_PIN;
    }

    /**
     * @return string
     */
    public function getCardRef()
    {
        return $this->cardRef;
    }

    /**
     * @param string $cardRef
     * @return ModelRequestGetCardGetPin
     */
    public function setCardRef($cardRef)
    {
        $this->cardRef = (string)$cardRef;
        return $this;
    }

    /**
     * @return string
     */
    public function getCvc()
    {
        return $this->cvc;
    }

    /**
     * @param string $cvc
     * @return ModelRequestGetCardGetPin
     */
    public function setCvc($cvc)
    {
        $this->cvc = $cvc;
        return $this;
    }
}