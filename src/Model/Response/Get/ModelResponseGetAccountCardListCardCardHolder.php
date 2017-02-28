<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountCardListCardCardHolder
{
    /**
     * @var string
     */
    private $gender;

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
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return ModelResponseGetAccountCardListCardCardHolder
     */
    public function setGender($gender)
    {
        $this->gender = (string)$gender;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return ModelResponseGetAccountCardListCardCardHolder
     */
    public function setFirstName($firstName)
    {
        $this->firstName = (string)$firstName;
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
     * @return ModelResponseGetAccountCardListCardCardHolder
     */
    public function setLastName($lastName)
    {
        $this->lastName = (string)$lastName;
        return $this;
    }
}