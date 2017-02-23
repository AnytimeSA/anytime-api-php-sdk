<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostCardSendPan extends ModelRequestPost
{
    /**
     * @var string
     */
    private $cardRef;

    /**
     * @var string
     */
    private $destMethod;

    /**
     * @var string
     */
    private $destValue;


    /**
     * @return string
     */
    public function getApiName()
    {
        return API::CARD_SEND_PAN;
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
     * @return ModelRequestPostCardSendPan
     */
    public function setCardRef($cardRef)
    {
        $this->cardRef = $cardRef;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestMethod()
    {
        return $this->destMethod;
    }

    /**
     * @param string $destMethod
     * @return ModelRequestPostCardSendPan
     */
    public function setDestMethod($destMethod)
    {
        $this->destMethod = $destMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestValue()
    {
        return $this->destValue;
    }

    /**
     * @param string $destValue
     * @return ModelRequestPostCardSendPan
     */
    public function setDestValue($destValue)
    {
        $this->destValue = $destValue;
        return $this;
    }

}