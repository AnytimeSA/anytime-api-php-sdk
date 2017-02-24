<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostCardSendPin extends ModelResponsePost
{
    /**
     * @return integer
     */
    public function getAccId()
    {
        return $this->getDataValue('acc_id');
    }

    /**
     * @return string
     */
    public function getCardRef()
    {
        return $this->getDataValue('card_ref');
    }
}