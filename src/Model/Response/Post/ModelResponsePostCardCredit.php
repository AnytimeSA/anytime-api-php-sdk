<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostCardCredit extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getCardRef()
    {
        return $this->getDataValue('card_ref');
    }

    /**
     * @return float
     */
    public function getCardBalanceAfter()
    {
        return $this->getDataValue('card_balance_after');
    }

    /**
     * @return integer
     */
    public function getCardAccId()
    {
        return $this->getDataValue('card_acc_id');
    }

    /**
     * @return float
     */
    public function getAccBalanceAfter()
    {
        return $this->getDataValue('acc_balance_after');
    }

    /**
     * @return integer
     */
    public function getTransactionId()
    {
        return $this->getDataValue('transaction_id');
    }

}