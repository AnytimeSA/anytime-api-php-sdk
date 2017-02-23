<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostAccountKyc extends ModelRequestPost
{
    /**
     * @var string
     */
    private $selfie;

    /**
     * @var string
     */
    private $identity;

    /**
     * @var string
     */
    private $identity_back;

    /**
     * @var string
     */
    private $dom_1;

    /**
     * @var string
     */
    private $identity_host;

    /**
     * @var string
     */
    private $identity_back_host;

    /**
     * @var string
     */
    private $dom_host;

    /**
     * @var string
     */
    private $affidavit;


    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_KYC;
    }

    /**
     * @return string
     */
    public function getSelfie()
    {
        return $this->selfie;
    }

    /**
     * @param string $selfie
     * @return ModelRequestPostAccountKyc
     */
    public function setSelfie($selfie)
    {
        $this->selfie = $selfie;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param string $identity
     * @return ModelRequestPostAccountKyc
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentityBack()
    {
        return $this->identity_back;
    }

    /**
     * @param string $identity_back
     * @return ModelRequestPostAccountKyc
     */
    public function setIdentityBack($identity_back)
    {
        $this->identity_back = $identity_back;
        return $this;
    }

    /**
     * @return string
     */
    public function getDom1()
    {
        return $this->dom_1;
    }

    /**
     * @param string $dom_1
     * @return ModelRequestPostAccountKyc
     */
    public function setDom1($dom_1)
    {
        $this->dom_1 = $dom_1;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentityHost()
    {
        return $this->identity_host;
    }

    /**
     * @param string $identity_host
     * @return ModelRequestPostAccountKyc
     */
    public function setIdentityHost($identity_host)
    {
        $this->identity_host = $identity_host;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentityBackHost()
    {
        return $this->identity_back_host;
    }

    /**
     * @param string $identity_back_host
     * @return ModelRequestPostAccountKyc
     */
    public function setIdentityBackHost($identity_back_host)
    {
        $this->identity_back_host = $identity_back_host;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomHost()
    {
        return $this->dom_host;
    }

    /**
     * @param string $dom_host
     * @return ModelRequestPostAccountKyc
     */
    public function setDomHost($dom_host)
    {
        $this->dom_host = $dom_host;
        return $this;
    }

    /**
     * @return string
     */
    public function getAffidavit()
    {
        return $this->affidavit;
    }

    /**
     * @param string $affidavit
     * @return ModelRequestPostAccountKyc
     */
    public function setAffidavit($affidavit)
    {
        $this->affidavit = $affidavit;
        return $this;
    }



}