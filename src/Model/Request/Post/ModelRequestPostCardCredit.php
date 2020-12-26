<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostCardCredit extends ModelRequestPost
{
    /**
     * @var string
     */
    private $cardRef;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $accComment;

    /**
     * @var string
     */
    private $cardComment;


    /**
     * @return string
     */
    public function getApiName()
    {
        return API::CARD_CREDIT;
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
     * @return ModelRequestPostCardCredit
     */
    public function setCardRef($cardRef)
    {
        $this->cardRef = (string)$cardRef;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return ModelRequestPostCardCredit
     */
    public function setAmount($amount)
    {
        $this->amount = (float)$amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccComment()
    {
        return $this->accComment;
    }

    /**
     * @param string $accComment
     * @return ModelRequestPostCardCredit
     */
    public function setAccComment($accComment)
    {
        $this->accComment = (string)$accComment;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardComment()
    {
        return $this->cardComment;
    }

    /**
     * @param string $cardComment
     * @return ModelRequestPostCardCredit
     */
    public function setCardComment($cardComment)
    {
        $this->cardComment = (string)$cardComment;
        return $this;
    }

}
