<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostAccountKycFileStatusUserIdentityHost
{
    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $error;

    /**
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param integer $status
     * @return ModelResponsePostAccountKycFileStatusUserIdentityHost
     */
    public function setStatus($status)
    {
        $this->status = (int)$status;
        return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     * @return ModelResponsePostAccountKycFileStatusUserIdentityHost
     */
    public function setError($error)
    {
        $this->error = (string)$error;
        return $this;
    }


}