<?php

namespace Anytime\ApiClient\Model\Response\Post;

abstract class ModelResponsePostAccountKycFileStatusAbstract
{
    /**
     * @var integer
     */
    protected $status;

    /**
     * @var string
     */
    protected $error;

    /**
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param integer $status
     * @return ModelResponsePostAccountKycFileStatusAbstract
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
     * @return ModelResponsePostAccountKycFileStatusAbstract
     */
    public function setError($error)
    {
        $this->error = (string)$error;
        return $this;
    }


}
