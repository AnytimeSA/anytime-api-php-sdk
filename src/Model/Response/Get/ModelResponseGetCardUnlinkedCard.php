<?php

namespace Anytime\ApiClient\Model\Response\Get;


class ModelResponseGetCardUnlinkedCard
{
    /**
     * @var string
     */
    private $cardRef;

    /**
     * @return string
     */
    public function getCardRef()
    {
        return $this->cardRef;
    }

    /**
     * @param string $cardRef
     * @return ModelResponsegetCardUnlinkedCard
     */
    public function setCardRef($cardRef)
    {
        $this->cardRef = $cardRef;
        return $this;
    }
}