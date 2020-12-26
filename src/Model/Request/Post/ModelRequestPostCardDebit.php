<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostCardDebit extends ModelRequestPost
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
        return API::CARD_DEBIT;
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
     * @return ModelRequestPostCardDebit
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
     * @return ModelRequestPostCardDebit
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
     * @return ModelRequestPostCardDebit
     */
    public function setCardComment($cardComment)
    {
        $this->cardComment = (string)$cardComment;
        return $this;
    }

}
