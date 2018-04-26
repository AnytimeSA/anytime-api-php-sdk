<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountCardListCard
{

    /**
     * @var string
     */
    private $cardRef;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $activationDate;

    /**
     * @var float
     */
    private $balance;

    /**
     * @var \DateTime
     */
    private $expiryDate;

    /**
     * @var integer
     */
    private $atm;

    /**
     * @var integer
     */
    private $pos;

    /**
     * @var string
     */
    private $cardType;

    /**
     * @var ModelResponseGetAccountCardListCardCardHolder
     */
    private $cardHolder;

    /**
     * @return string
     */
    public function getCardRef()
    {
        return $this->cardRef;
    }

    /**
     * @param string $cardRef
     * @return ModelResponseGetAccountCardListCard
     */
    public function setCardRef($cardRef)
    {
        $this->cardRef = (string)$cardRef;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ModelResponseGetAccountCardListCard
     */
    public function setStatus($status)
    {
        $this->status = (string)$status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActivationDate()
    {
        return $this->activationDate;
    }

    /**
     * @param \DateTime $activationDate
     * @return ModelResponseGetAccountCardListCard
     */
    public function setActivationDate(\DateTime $activationDate)
    {
        $this->activationDate = $activationDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     * @return ModelResponseGetAccountCardListCard
     */
    public function setBalance($balance)
    {
        $this->balance = (float)$balance;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param \DateTime $expiryDate
     * @return ModelResponseGetAccountCardListCard
     */
    public function setExpiryDate(\DateTime $expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * @return integer
     */
    public function getAtm()
    {
        return $this->atm;
    }

    /**
     * @param integer $atm
     * @return ModelResponseGetAccountCardListCard
     */
    public function setAtm($atm)
    {
        $this->atm = (int)$atm;
        return $this;
    }

    /**
     * @return integer
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * @param int $pos
     * @return ModelResponseGetAccountCardListCard
     */
    public function setPos($pos)
    {
        $this->pos = (int)$pos;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param string $cardType
     * @return ModelResponseGetAccountCardListCard
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
        return $this;
    }

    /**
     * @return ModelResponseGetAccountCardListCardCardHolder
     */
    public function getCardHolder()
    {
        return $this->cardHolder;
    }

    /**
     * @param ModelResponseGetAccountCardListCardCardHolder $cardHolder
     * @return ModelResponseGetAccountCardListCard
     */
    public function setCardHolder($cardHolder)
    {
        $this->cardHolder = $cardHolder;
        return $this;
    }
}