<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostCardSendPin extends ModelResponsePost
{
    /**
     * @return integer
     */
    public function getAccId()
    {
        return (int)$this->getDataValue('acc_id');
    }

    /**
     * @return string
     */
    public function getCardRef()
    {
        return (string)$this->getDataValue('card_ref');
    }
}