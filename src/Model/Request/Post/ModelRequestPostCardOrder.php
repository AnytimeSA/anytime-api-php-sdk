<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostCardOrder extends ModelRequestPost
{
    /**
     * @var integer
     */
    private $accId;

    /**
     * @var string
     */
    private $cardName;

    /**
     * @var string
     */
    private $cardType;

    /**
     * @var \DateTime
     */
    private $expiryDate;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $deliveryCompanyName;

    /**
     * @var string
     */
    private $deliveryGender;

    /**
     * @var string
     */
    private $deliveryFirstName;

    /**
     * @var string
     */
    private $deliveryLastName;

    /**
     * @var string
     */
    private $deliveryAddr1;

    /**
     * @var string
     */
    private $deliveryAddr2;

    /**
     * @var string
     */
    private $deliveryZip;

    /**
     * @var string
     */
    private $deliveryCity;

    /**
     * @var string
     */
    private $deliveryCc;


    /**
     * @return string
     */
    public function getApiName()
    {
        return API::CARD_ORDER;
    }

    /**
     * @return integer
     */
    public function getAccId()
    {
        return $this->accId;
    }

    /**
     * @param integer $accId
     * @return ModelRequestPostCardOrder
     */
    public function setAccId($accId)
    {
        $this->accId = (int)$accId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardName()
    {
        return $this->cardName;
    }

    /**
     * @param string $cardName
     * @return ModelRequestPostCardOrder
     */
    public function setCardName($cardName)
    {
        $this->cardName = (string)$cardName;
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
     * @return ModelRequestPostCardOrder
     */
    public function setCardType($cardType)
    {
        $this->cardType = (string)$cardType;
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
     * @return ModelRequestPostCardOrder
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $this->timezoneNormalizer->normalize($expiryDate);
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return ModelRequestPostCardOrder
     */
    public function setAmount($amount)
    {
        $this->amount = (float)$amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return ModelRequestPostCardOrder
     */
    public function setLanguage($language)
    {
        $this->language = (string)$language;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCompanyName()
    {
        return $this->deliveryCompanyName;
    }

    /**
     * @param string $deliveryCompanyName
     * @return ModelRequestPostCardOrder
     */
    public function setDeliveryCompanyName($deliveryCompanyName)
    {
        $this->deliveryCompanyName = (string)$deliveryCompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryGender()
    {
        return $this->deliveryGender;
    }

    /**
     * @param string $deliveryGender
     * @return ModelRequestPostCardOrder
     */
    public function setDeliveryGender($deliveryGender)
    {
        $this->deliveryGender = (string)$deliveryGender;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryFirstName()
    {
        return $this->deliveryFirstName;
    }

    /**
     * @param string $deliveryFirstName
     * @return ModelRequestPostCardOrder
     */
    public function setDeliveryFirstName($deliveryFirstName)
    {
        $this->deliveryFirstName = (string)$deliveryFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryLastName()
    {
        return $this->deliveryLastName;
    }

    /**
     * @param string $deliveryLastName
     * @return ModelRequestPostCardOrder
     */
    public function setDeliveryLastName($deliveryLastName)
    {
        $this->deliveryLastName = (string)$deliveryLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddr1()
    {
        return $this->deliveryAddr1;
    }

    /**
     * @param string $deliveryAddr1
     * @return ModelRequestPostCardOrder
     */
    public function setDeliveryAddr1($deliveryAddr1)
    {
        $this->deliveryAddr1 = (string)$deliveryAddr1;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddr2()
    {
        return $this->deliveryAddr2;
    }

    /**
     * @param string $deliveryAddr2
     * @return ModelRequestPostCardOrder
     */
    public function setDeliveryAddr2($deliveryAddr2)
    {
        $this->deliveryAddr2 = (string)$deliveryAddr2;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryZip()
    {
        return $this->deliveryZip;
    }

    /**
     * @param string $deliveryZip
     * @return ModelRequestPostCardOrder
     */
    public function setDeliveryZip($deliveryZip)
    {
        $this->deliveryZip = (string)$deliveryZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCity()
    {
        return $this->deliveryCity;
    }

    /**
     * @param string $deliveryCity
     * @return ModelRequestPostCardOrder
     */
    public function setDeliveryCity($deliveryCity)
    {
        $this->deliveryCity = (string)$deliveryCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCc()
    {
        return $this->deliveryCc;
    }

    /**
     * @param string $deliveryCc
     * @return ModelRequestPostCardOrder
     */
    public function setDeliveryCc($deliveryCc)
    {
        $this->deliveryCc = (string)$deliveryCc;
        return $this;
    }

}
