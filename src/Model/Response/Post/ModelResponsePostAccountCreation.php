<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostAccountCreation extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getAccType()
    {
        return (string)$this->getDataValue('acc_type');
    }

    /**
     * @return integer
     */
    public function getAccId()
    {
        return (int)$this->getDataValue('acc_id');
    }
}