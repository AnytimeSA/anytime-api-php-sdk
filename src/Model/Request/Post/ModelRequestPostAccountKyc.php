<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostAccountKyc extends ModelRequestPost
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $userSelfie;

    /**
     * @var string
     */
    private $userIdentity;

    /**
     * @var string
     */
    private $userIdentityBack;

    /**
     * @var string
     */
    private $userDom1;

    /**
     * @var string
     */
    private $userIdentityHost;

    /**
     * @var string
     */
    private $userIdentityBackHost;

    /**
     * @var string
     */
    private $userDomHost;

    /**
     * @var string
     */
    private $userAffidavit;

    /**
     * @var string
     */
    private $corpStatus;

    /**
     * @var string
     */
    private $corpKbis;


    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_KYC;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ModelRequestPostAccountKyc
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserSelfie()
    {
        return $this->userSelfie;
    }

    /**
     * @param string $userSelfie
     * @return ModelRequestPostAccountKyc
     */
    public function setUserSelfie($userSelfie)
    {
        $this->userSelfie = $userSelfie;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserIdentity()
    {
        return $this->userIdentity;
    }

    /**
     * @param string $userIdentity
     * @return ModelRequestPostAccountKyc
     */
    public function setUserIdentity($userIdentity)
    {
        $this->userIdentity = $userIdentity;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserIdentityBack()
    {
        return $this->userIdentityBack;
    }

    /**
     * @param string $userIdentityBack
     * @return ModelRequestPostAccountKyc
     */
    public function setUserIdentityBack($userIdentityBack)
    {
        $this->userIdentityBack = $userIdentityBack;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserDom1()
    {
        return $this->userDom1;
    }

    /**
     * @param string $userDom1
     * @return ModelRequestPostAccountKyc
     */
    public function setUserDom1($userDom1)
    {
        $this->userDom1 = $userDom1;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserIdentityHost()
    {
        return $this->userIdentityHost;
    }

    /**
     * @param string $userIdentityHost
     * @return ModelRequestPostAccountKyc
     */
    public function setUserIdentityHost($userIdentityHost)
    {
        $this->userIdentityHost = $userIdentityHost;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserIdentityBackHost()
    {
        return $this->userIdentityBackHost;
    }

    /**
     * @param string $userIdentityBackHost
     * @return ModelRequestPostAccountKyc
     */
    public function setUserIdentityBackHost($userIdentityBackHost)
    {
        $this->userIdentityBackHost = $userIdentityBackHost;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserDomHost()
    {
        return $this->userDomHost;
    }

    /**
     * @param string $userDomHost
     * @return ModelRequestPostAccountKyc
     */
    public function setUserDomHost($userDomHost)
    {
        $this->userDomHost = $userDomHost;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAffidavit()
    {
        return $this->userAffidavit;
    }

    /**
     * @param string $userAffidavit
     * @return ModelRequestPostAccountKyc
     */
    public function setUserAffidavit($userAffidavit)
    {
        $this->userAffidavit = $userAffidavit;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorpStatus()
    {
        return $this->corpStatus;
    }

    /**
     * @param string $corpStatus
     * @return ModelRequestPostAccountKyc
     */
    public function setCorpStatus($corpStatus)
    {
        $this->corpStatus = $corpStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorpKbis()
    {
        return $this->corpKbis;
    }

    /**
     * @param string $corpKbis
     * @return ModelRequestPostAccountKyc
     */
    public function setCorpKbis($corpKbis)
    {
        $this->corpKbis = $corpKbis;
        return $this;
    }




}