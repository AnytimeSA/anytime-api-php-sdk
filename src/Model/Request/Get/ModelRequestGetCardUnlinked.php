<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetCardUnlinked extends ModelRequestGet
{    /**
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
        return API::CARD_UNLINKED;
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
     * @return ModelRequestGetCardUnlinked
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
     * @return ModelRequestGetCardUnlinked
     */
    public function setLimitNumber($limitNumber)
    {
        $this->limitNumber = $limitNumber;
        return $this;
    }

}
