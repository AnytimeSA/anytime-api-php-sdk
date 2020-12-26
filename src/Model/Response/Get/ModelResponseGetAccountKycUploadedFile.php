<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountKycUploadedFile
{
    /**
     * See Anytime\ApiClient\Constant\KycType constants
     *
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $url;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * See Anytime\ApiClient\Constant\KycUploadedFileStatus constants
     *
     * @var string
     */
    private $status;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return ModelResponseGetAccountKycUploadedFile
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return ModelResponseGetAccountKycUploadedFile
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return ModelResponseGetAccountKycUploadedFile
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ModelResponseGetAccountKycUploadedFile
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

}
