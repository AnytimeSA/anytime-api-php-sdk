<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostAccountLinkCards extends ModelRequestPost
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cards;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_LINK_CARDS;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ModelRequestPostAccountLinkCards
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * @param string $cards
     * @return ModelRequestPostAccountLinkCards
     */
    public function setCards($cards)
    {
        $this->cards = $cards;
        return $this;
    }
}