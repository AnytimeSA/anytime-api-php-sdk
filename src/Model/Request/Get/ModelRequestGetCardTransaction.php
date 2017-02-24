<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetCardTransaction extends ModelRequestGet
{
    /**
     * @var \DateTime
     */
    private $dateStart;

    /**
     * @var \DateTime
     */
    private $dateEnd;

    /**
     * @var integer
     */
    private $limitStart;

    /**
     * @var integer
     */
    private $limitNumber;

    /**
     * @var string
     */
    private $cardRef;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::CARD_TRANSACTION;
    }

    /**
     * @return string
     */
    public function getCardRef()
    {
        return $this->cardRef;
    }

    /**
     * @param string $cardRef
     * @return ModelRequestGetCardTransaction
     */
    public function setCardRef($cardRef)
    {
        $this->cardRef = $cardRef;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param \DateTime|string $dateStart
     * @return ModelRequestGetCardTransaction
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $this->timezoneNormalizer->normalize($dateStart);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @param \DateTime|string $dateEnd
     * @return ModelRequestGetCardTransaction
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $this->timezoneNormalizer->normalize($dateEnd);
        return $this;
    }

    /**
     * @return integer
     */
    public function getLimitStart()
    {
        return $this->limitStart;
    }

    /**
     * @param integer $limitStart
     * @return ModelRequestGetCardTransaction
     */
    public function setLimitStart($limitStart)
    {
        $this->limitStart = $limitStart;
        return $this;
    }

    /**
     * @return integer
     */
    public function getLimitNumber()
    {
        return $this->limitNumber;
    }

    /**
     * @param integer $limitNumber
     * @return ModelRequestGetCardTransaction
     */
    public function setLimitNumber($limitNumber)
    {
        $this->limitNumber = $limitNumber;
        return $this;
    }
}