<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostCardCredit extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getCardRef()
    {
        return (string)$this->getDataValue('card_ref');
    }

    /**
     * @return integer
     */
    public function getCardAccId()
    {
        return (int)$this->getDataValue('card_acc_id');
    }

    /**
     * @return integer
     */
    public function getTransactionId()
    {
        return (int)$this->getDataValue('transaction_id');
    }

}
