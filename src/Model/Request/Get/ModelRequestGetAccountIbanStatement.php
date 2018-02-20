<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetAccountIbanStatement extends ModelRequestGet
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateStart;

    /**
     * @var \DateTime
     */
    private $dateEnd;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     * @return ModelRequestGetAccountIbanStatement
     */
    public function setId($id)
    {
        $this->id = (int)$id;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_IBAN_STATEMENT;
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
     * @return ModelRequestGetAccountIbanStatement
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
     * @return ModelRequestGetAccountIbanStatement
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $this->timezoneNormalizer->normalize($dateEnd);
        return $this;
    }


}