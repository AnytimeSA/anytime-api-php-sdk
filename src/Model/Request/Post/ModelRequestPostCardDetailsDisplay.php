<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostCardDetailsDisplay extends ModelRequestPost
{
    /**
     * @var string
     */
    private $cardRef;

    /**
     * @var string
     */
    private $ip;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::CARD_DETAILS_DISPLAY;
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
     * @return ModelRequestPostCardDebit
     */
    public function setCardRef($cardRef)
    {
        $this->cardRef = $cardRef;
        return $this;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return ModelRequestPostCardDebit
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
    }



}