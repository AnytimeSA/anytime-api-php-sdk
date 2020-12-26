<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostCardSendPin extends ModelRequestPost
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
        return API::CARD_SEND_PIN;
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
     * @return ModelRequestPostCardSendPin
     */
    public function setCardRef($cardRef)
    {
        $this->cardRef = (string)$cardRef;
        return $this;
    }

}
