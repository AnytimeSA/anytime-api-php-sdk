<?php

namespace Anytime\ApiClient\Model\Request\Put;

use Anytime\ApiClient\Constant\API;

class ModelRequestPutCardUpdate extends ModelRequestPut
{
    /**
     * @var string
     */
    private $cardRef;

    /**
     * @var string
     */
    private $cardStatus;

    /**
     * @var integer
     */
    private $cardPos;

    /**
     * @var integer
     */
    private $cardAtm;

    /**
     * @var integer
     */
    private $cardRenew;


    /**
     * @return string
     */
    public function getApiName()
    {
        return API::CARD_UPDATE;
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
     * @return ModelRequestPutCardUpdate
     */
    public function setCardRef($cardRef)
    {
        $this->cardRef = (string)$cardRef;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardStatus()
    {
        return $this->cardStatus;
    }

    /**
     * @param string $cardStatus
     * @return ModelRequestPutCardUpdate
     */
    public function setCardStatus($cardStatus)
    {
        $this->cardStatus = (string)$cardStatus;
        return $this;
    }

    /**
     * @return integer
     */
    public function getCardPos()
    {
        return $this->cardPos;
    }

    /**
     * @param integer $cardPos
     * @return ModelRequestPutCardUpdate
     */
    public function setCardPos($cardPos)
    {
        $this->cardPos = (int)$cardPos;
        return $this;
    }

    /**
     * @return integer
     */
    public function getCardAtm()
    {
        return $this->cardAtm;
    }

    /**
     * @param integer $cardAtm
     * @return ModelRequestPutCardUpdate
     */
    public function setCardAtm($cardAtm)
    {
        $this->cardAtm = (int)$cardAtm;
        return $this;
    }

    /**
     * @return integer
     */
    public function getCardRenew()
    {
        return $this->cardRenew;
    }

    /**
     * @param integer $cardRenew
     * @return ModelRequestPutCardUpdate
     */
    public function setCardRenew($cardRenew)
    {
        $this->cardRenew = (int)$cardRenew;
        return $this;
    }


}