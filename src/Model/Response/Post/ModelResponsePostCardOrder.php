<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostCardOrder extends ModelResponsePost
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
    public function getOrderId()
    {
        return (int)$this->getDataValue('order_id');
    }

    /**
     * @return integer
     */
    public function getOrderStatus()
    {
        return (int)$this->getDataValue('order_status');
    }
}
