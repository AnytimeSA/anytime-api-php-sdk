<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetAccountCardList extends ModelRequestGet
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $limitStart;

    /**
     * @var integer
     */
    private $limitNumber;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_CARD_LIST;
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
     * @return ModelRequestGetAccountCardList
     */
    public function setId($id)
    {
        $this->id = (int)$id;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitStart()
    {
        return $this->limitStart;
    }

    /**
     * @param int $limitStart
     * @return ModelRequestGetAccountCardList
     */
    public function setLimitStart($limitStart)
    {
        $this->limitStart = $limitStart;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitNumber()
    {
        return $this->limitNumber;
    }

    /**
     * @param int $limitNumber
     * @return ModelRequestGetAccountCardList
     */
    public function setLimitNumber($limitNumber)
    {
        $this->limitNumber = $limitNumber;
        return $this;
    }
}