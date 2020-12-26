<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostAccountIbanCreation extends ModelRequestPost
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_IBAN_CREATION;
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
     * @return ModelRequestPostAccountIbanCreation
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return ModelRequestPostAccountIbanCreation
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

}
