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
        $this->cardRef = $cardRef;
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
        $this->cardStatus = $cardStatus;
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
     * @param int $cardPos
     * @return ModelRequestPutCardUpdate
     */
    public function setCardPos($cardPos)
    {
        $this->cardPos = $cardPos;
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
     * @param int $cardAtm
     * @return ModelRequestPutCardUpdate
     */
    public function setCardAtm($cardAtm)
    {
        $this->cardAtm = $cardAtm;
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
     * @param int $cardRenew
     * @return ModelRequestPutCardUpdate
     */
    public function setCardRenew($cardRenew)
    {
        $this->cardRenew = $cardRenew;
        return $this;
    }


}