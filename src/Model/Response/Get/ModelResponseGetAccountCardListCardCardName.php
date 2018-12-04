<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountCardListCardCardName
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return ModelResponseGetAccountCardListCardCardName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return ModelResponseGetAccountCardListCardCardName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

}
