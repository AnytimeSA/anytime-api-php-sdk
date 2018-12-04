<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetCardInfoCardHolder
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
     * @return ModelResponseGetCardInfoCardHolder
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

}
