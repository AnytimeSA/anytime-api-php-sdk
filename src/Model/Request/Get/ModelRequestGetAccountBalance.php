<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetAccountBalance extends ModelRequestGet
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_BALANCE;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     * @return ModelRequestGetAccountBalance
     */
    public function setId($id)
    {
        $this->id = (int)$id;
        return $this;
    }

}