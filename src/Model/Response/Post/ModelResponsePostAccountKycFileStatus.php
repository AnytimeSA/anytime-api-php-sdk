<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostAccountKycFileStatus
{
    /**
     * @var ModelResponsePostAccountKycFileStatusUserSelfie
     */
    private $userSelfie;

    /**
     * @var ModelResponsePostAccountKycFileStatusUserIdentity
     */
    private $userIdentity;

    /**
     * @var ModelResponsePostAccountKycFileStatusUserIdentityBack
     */
    private $userIdentityBack;

    /**
     * @var ModelResponsePostAccountKycFileStatusUserDom1
     */
    private $userDom1;

    /**
     * @var ModelResponsePostAccountKycFileStatusUserIdentityHost
     */
    private $userIdentityHost;

    /**
     * @var ModelResponsePostAccountKycFileStatusUserIdentityBackHost
     */
    private $userIdentityBackHost;

    /**
     * @var ModelResponsePostAccountKycFileStatusUserDomHost
     */
    private $userDomHost;

    /**
     * @var ModelResponsePostAccountKycFileStatusUserAffidavit
     */
    private $userAffidavit;

    /**
     * @var ModelResponsePostAccountKycFileStatusCorpStatus
     */
    private $corpStatus;

    /**
     * @var ModelResponsePostAccountKycFileStatusCorpKbis
     */
    private $corpKbis;

    /**
     * @return ModelResponsePostAccountKycFileStatusUserSelfie
     */
    public function getUserSelfie()
    {
        return $this->userSelfie;
    }

    /**
     * @param ModelResponsePostAccountKycFileStatusUserSelfie $userSelfie
     * @return ModelResponsePostAccountKycFileStatus
     */
    public function setUserSelfie($userSelfie)
    {
        $this->userSelfie = $userSelfie;
        return $this;
    }

    /**
     * @return ModelResponsePostAccountKycFileStatusUserIdentity
     */
    public function getUserIdentity()
    {
        return $this->userIdentity;
    }

    /**
     * @param ModelResponsePostAccountKycFileStatusUserIdentity $userIdentity
     * @return ModelResponsePostAccountKycFileStatus
     */
    public function setUserIdentity($userIdentity)
    {
        $this->userIdentity = $userIdentity;
        return $this;
    }

    /**
     * @return ModelResponsePostAccountKycFileStatusUserIdentityBack
     */
    public function getUserIdentityBack()
    {
        return $this->userIdentityBack;
    }

    /**
     * @param ModelResponsePostAccountKycFileStatusUserIdentityBack $userIdentityBack
     * @return ModelResponsePostAccountKycFileStatus
     */
    public function setUserIdentityBack($userIdentityBack)
    {
        $this->userIdentityBack = $userIdentityBack;
        return $this;
    }

    /**
     * @return ModelResponsePostAccountKycFileStatusUserDom1
     */
    public function getUserDom1()
    {
        return $this->userDom1;
    }

    /**
     * @param ModelResponsePostAccountKycFileStatusUserDom1 $userDom1
     * @return ModelResponsePostAccountKycFileStatus
     */
    public function setUserDom1($userDom1)
    {
        $this->userDom1 = $userDom1;
        return $this;
    }

    /**
     * @return ModelResponsePostAccountKycFileStatusUserIdentityHost
     */
    public function getUserIdentityHost()
    {
        return $this->userIdentityHost;
    }

    /**
     * @param ModelResponsePostAccountKycFileStatusUserIdentityHost $userIdentityHost
     * @return ModelResponsePostAccountKycFileStatus
     */
    public function setUserIdentityHost($userIdentityHost)
    {
        $this->userIdentityHost = $userIdentityHost;
        return $this;
    }

    /**
     * @return ModelResponsePostAccountKycFileStatusUserIdentityBackHost
     */
    public function getUserIdentityBackHost()
    {
        return $this->userIdentityBackHost;
    }

    /**
     * @param ModelResponsePostAccountKycFileStatusUserIdentityBackHost $userIdentityBackHost
     * @return ModelResponsePostAccountKycFileStatus
     */
    public function setUserIdentityBackHost($userIdentityBackHost)
    {
        $this->userIdentityBackHost = $userIdentityBackHost;
        return $this;
    }

    /**
     * @return ModelResponsePostAccountKycFileStatusUserDomHost
     */
    public function getUserDomHost()
    {
        return $this->userDomHost;
    }

    /**
     * @param ModelResponsePostAccountKycFileStatusUserDomHost $userDomHost
     * @return ModelResponsePostAccountKycFileStatus
     */
    public function setUserDomHost($userDomHost)
    {
        $this->userDomHost = $userDomHost;
        return $this;
    }

    /**
     * @return ModelResponsePostAccountKycFileStatusUserAffidavit
     */
    public function getUserAffidavit()
    {
        return $this->userAffidavit;
    }

    /**
     * @param ModelResponsePostAccountKycFileStatusUserAffidavit $userAffidavit
     * @return ModelResponsePostAccountKycFileStatus
     */
    public function setUserAffidavit($userAffidavit)
    {
        $this->userAffidavit = $userAffidavit;
        return $this;
    }

    /**
     * @return ModelResponsePostAccountKycFileStatusCorpStatus
     */
    public function getCorpStatus()
    {
        return $this->corpStatus;
    }

    /**
     * @param ModelResponsePostAccountKycFileStatusCorpStatus $corpStatus
     * @return ModelResponsePostAccountKycFileStatus
     */
    public function setCorpStatus($corpStatus)
    {
        $this->corpStatus = $corpStatus;
        return $this;
    }

    /**
     * @return ModelResponsePostAccountKycFileStatusCorpKbis
     */
    public function getCorpKbis()
    {
        return $this->corpKbis;
    }

    /**
     * @param ModelResponsePostAccountKycFileStatusCorpKbis $corpKbis
     * @return ModelResponsePostAccountKycFileStatus
     */
    public function setCorpKbis($corpKbis)
    {
        $this->corpKbis = $corpKbis;
        return $this;
    }

}