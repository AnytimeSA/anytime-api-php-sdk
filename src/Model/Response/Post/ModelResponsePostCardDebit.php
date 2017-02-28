<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostCardDebit extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getCardRef()
    {
        return (string)$this->getDataValue('card_ref');
    }

    /**
     * @return float
     */
    public function getCardBalanceAfter()
    {
        return (float)$this->getDataValue('card_balance_after');
    }

    /**
     * @return integer
     */
    public function getCardAccId()
    {
        return (int)$this->getDataValue('card_acc_id');
    }

    /**
     * @return float
     */
    public function getAccBalanceAfter()
    {
        return (float)$this->getDataValue('acc_balance_after');
    }

    /**
     * @return integer
     */
    public function getTransactionId()
    {
        return (int)$this->getDataValue('transaction_id');
    }

}