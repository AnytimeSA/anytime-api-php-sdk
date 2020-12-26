<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostAccountVirtualIbanCreation extends ModelRequestPost
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_VIRTUAL_IBAN_CREATION;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return ModelRequestPostAccountVirtualIbanCreation
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
