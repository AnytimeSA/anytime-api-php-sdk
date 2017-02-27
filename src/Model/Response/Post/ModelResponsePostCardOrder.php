<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostCardOrder extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getCardRef()
    {
        return $this->getDataValue('card_ref');
    }

    /**
     * @return integer
     */
    public function getOrderId()
    {
        return $this->getDataValue('order_id');
    }

    /**
     * @return integer
     */
    public function getOrderStatus()
    {
        return $this->getDataValue('order_status');
    }
}