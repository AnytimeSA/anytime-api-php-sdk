<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetCardInfo extends ModelRequestGet
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
        return API::CARD_INFO;
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