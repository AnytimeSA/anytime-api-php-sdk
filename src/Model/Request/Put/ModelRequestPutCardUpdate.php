<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPutCardUpdate extends ModelRequestPost
{
    /**
     * @var string
     */
    private $card_ref;

    /**
     * @var string
     */
    private $card_status;

    /**
     * @var integer
     */
    private $card_pos;

    /**
     * @var integer
     */
    private $card_atm;

    /**
     * @var integer
     */
    private $card_renew;


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
        return $this->card_ref;
    }

    /**
     * @param string $card_ref
     * @return ModelRequestPutCardUpdate
     */
    public function setCardRef($card_ref)
    {
        $this->card_ref = $card_ref;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardStatus()
    {
        return $this->card_status;
    }

    /**
     * @param string $card_status
     * @return ModelRequestPutCardUpdate
     */
    public function setCardStatus($card_status)
    {
        $this->card_status = $card_status;
        return $this;
    }

    /**
     * @return int
     */
    public function getCardPos()
    {
        return $this->card_pos;
    }

    /**
     * @param int $card_pos
     * @return ModelRequestPutCardUpdate
     */
    public function setCardPos($card_pos)
    {
        $this->card_pos = $card_pos;
        return $this;
    }

    /**
     * @return int
     */
    public function getCardAtm()
    {
        return $this->card_atm;
    }

    /**
     * @param int $card_atm
     * @return ModelRequestPutCardUpdate
     */
    public function setCardAtm($card_atm)
    {
        $this->card_atm = $card_atm;
        return $this;
    }

    /**
     * @return int
     */
    public function getCardRenew()
    {
        return $this->card_renew;
    }

    /**
     * @param int $card_renew
     * @return ModelRequestPutCardUpdate
     */
    public function setCardRenew($card_renew)
    {
        $this->card_renew = $card_renew;
        return $this;
    }

}