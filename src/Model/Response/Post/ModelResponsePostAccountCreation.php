<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostAccountCreation extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getAccType()
    {
        return $this->getDataValue('acc_type');
    }

    /**
     * @return integer
     */
    public function getAccId()
    {
        return $this->getDataValue('acc_id');
    }
}