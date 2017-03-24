<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetCardGetPan extends ModelRequestGet
{
    /**
     * @var string
     */
    private $cardRef;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::CARD_GET_PAN;
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
     * @return ModelRequestGetCardInfo
     */
    public function setCardRef($cardRef)
    {
        $this->cardRef = (string)$cardRef;
        return $this;
    }


}