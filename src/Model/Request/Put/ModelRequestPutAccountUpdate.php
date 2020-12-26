<?php

namespace Anytime\ApiClient\Model\Request\Put;

use Anytime\ApiClient\Constant\API;

class ModelRequestPutAccountUpdate extends ModelRequestPut
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $accType;

    /**
     * @var string
     */
    private $accCurrency;

    /**
     * @var string
     */
    private $userGender;

    /**
     * @var string
     */
    private $userFirstName;

    /**
     * @var string
     */
    private $userLastName;

    /**
     * @var \DateTime
     */
    private $userDob;

    /**
     * @var string
     */
    private $userPob;

    /**
     * @var string
     */
    private $userEmail;

    /**
     * @var string
     */
    private $userMobileNumber;

    /**
     * @var string
     */
    private $userAddrLine1;

    /**
     * @var string
     */
    private $userAddrLine2;

    /**
     * @var string
     */
    private $userAddrZip;

    /**
     * @var string
     */
    private $userAddrCity;

    /**
     * @var string
     */
    private $userAddrCc;

    /**
     * @var string
     */
    private $userNationality;

    /**
     * @var string
     */
    private $corpName;

    /**
     * @var string
     */
    private $corpRegNum;

    /**
     * @var string
     */
    private $corpType;

    /**
     * @var string
     */
    private $corpActivity;

    /**
     * @var string
     */
    private $corpTva;

    /**
     * @var string
     */
    private $corpAddrLine1;

    /**
     * @var string
     */
    private $corpAddrLine2;

    /**
     * @var string
     */
    private $corpAddrZip;

    /**
     * @var string
     */
    private $corpAddrCity;

    /**
     * @var string
     */
    private $corpAddrCc;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_UPDATE;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     * @return ModelRequestPutAccountUpdate
     */
    public function setId($id)
    {
        $this->id = (int)$id;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccType()
    {
        return $this->accType;
    }

    /**
     * @param string $accType
     * @return ModelRequestPutAccountUpdate
     */
    public function setAccType($accType)
    {
        $this->accType = (string)$accType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccCurrency()
    {
        return $this->accCurrency;
    }

    /**
     * @param string $accCurrency
     * @return ModelRequestPutAccountUpdate
     */
    public function setAccCurrency($accCurrency)
    {
        $this->accCurrency = (string)$accCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserGender()
    {
        return $this->userGender;
    }

    /**
     * @param string $userGender
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserGender($userGender)
    {
        $this->userGender = (string)$userGender;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * @param string $userFirstName
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserFirstName($userFirstName)
    {
        $this->userFirstName = (string)$userFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    /**
     * @param string $userLastName
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserLastName($userLastName)
    {
        $this->userLastName = (string)$userLastName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUserDob()
    {
        return $this->userDob;
    }

    /**
     * @param \DateTime $userDob
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserDob($userDob)
    {
        $this->userDob = $this->timezoneNormalizer->normalize($userDob);
        return $this;
    }

    /**
     * @return string
     */
    public function getUserPob()
    {
        return $this->userPob;
    }

    /**
     * @param string $userPob
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserPob($userPob)
    {
        $this->userPob = (string)$userPob;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param string $userEmail
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = (string)$userEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserMobileNumber()
    {
        return $this->userMobileNumber;
    }

    /**
     * @param string $userMobileNumber
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserMobileNumber($userMobileNumber)
    {
        $this->userMobileNumber = (string)$userMobileNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAddrLine1()
    {
        return $this->userAddrLine1;
    }

    /**
     * @param string $userAddrLine1
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserAddrLine1($userAddrLine1)
    {
        $this->userAddrLine1 = (string)$userAddrLine1;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAddrLine2()
    {
        return $this->userAddrLine2;
    }

    /**
     * @param string $userAddrLine2
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserAddrLine2($userAddrLine2)
    {
        $this->userAddrLine2 = (string)$userAddrLine2;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAddrZip()
    {
        return $this->userAddrZip;
    }

    /**
     * @param string $userAddrZip
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserAddrZip($userAddrZip)
    {
        $this->userAddrZip = (string)$userAddrZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAddrCity()
    {
        return $this->userAddrCity;
    }

    /**
     * @param string $userAddrCity
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserAddrCity($userAddrCity)
    {
        $this->userAddrCity = (string)$userAddrCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAddrCc()
    {
        return $this->userAddrCc;
    }

    /**
     * @param string $userAddrCc
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserAddrCc($userAddrCc)
    {
        $this->userAddrCc = (string)$userAddrCc;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserNationality()
    {
        return $this->userNationality;
    }

    /**
     * @param string $userNationality
     * @return ModelRequestPutAccountUpdate
     */
    public function setUserNationality($userNationality)
    {
        $this->userNationality = (string)$userNationality;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorpName()
    {
        return $this->corpName;
    }

    /**
     * @param string $corpName
     * @return ModelRequestPutAccountUpdate
     */
    public function setCorpName($corpName)
    {
        $this->corpName = (string)$corpName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorpRegNum()
    {
        return $this->corpRegNum;
    }

    /**
     * @param string $corpRegNum
     * @return ModelRequestPutAccountUpdate
     */
    public function setCorpRegNum($corpRegNum)
    {
        $this->corpRegNum = (string)$corpRegNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorpType()
    {
        return $this->corpType;
    }

    /**
     * @param string $corpType
     * @return ModelRequestPutAccountUpdate
     */
    public function setCorpType($corpType)
    {
        $this->corpType = (string)$corpType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorpActivity()
    {
        return $this->corpActivity;
    }

    /**
     * @param string $corpActivity
     * @return ModelRequestPutAccountUpdate
     */
    public function setCorpActivity($corpActivity)
    {
        $this->corpActivity = (string)$corpActivity;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorpTva()
    {
        return $this->corpTva;
    }

    /**
     * @param string $corpTva
     * @return ModelRequestPutAccountUpdate
     */
    public function setCorpTva($corpTva)
    {
        $this->corpTva = (string)$corpTva;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorpAddrLine1()
    {
        return $this->corpAddrLine1;
    }

    /**
     * @param string $corpAddrLine1
     * @return ModelRequestPutAccountUpdate
     */
    public function setCorpAddrLine1($corpAddrLine1)
    {
        $this->corpAddrLine1 = (string)$corpAddrLine1;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorpAddrLine2()
    {
        return $this->corpAddrLine2;
    }

    /**
     * @param string $corpAddrLine2
     * @return ModelRequestPutAccountUpdate
     */
    public function setCorpAddrLine2($corpAddrLine2)
    {
        $this->corpAddrLine2 = (string)$corpAddrLine2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorpAddrZip()
    {
        return $this->corpAddrZip;
    }

    /**
     * @param string $corpAddrZip
     * @return ModelRequestPutAccountUpdate
     */
    public function setCorpAddrZip($corpAddrZip)
    {
        $this->corpAddrZip = (string)$corpAddrZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorpAddrCity()
    {
        return $this->corpAddrCity;
    }

    /**
     * @param string $corpAddrCity
     * @return ModelRequestPutAccountUpdate
     */
    public function setCorpAddrCity($corpAddrCity)
    {
        $this->corpAddrCity = (string)$corpAddrCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorpAddrCc()
    {
        return $this->corpAddrCc;
    }

    /**
     * @param string $corpAddrCc
     * @return ModelRequestPutAccountUpdate
     */
    public function setCorpAddrCc($corpAddrCc)
    {
        $this->corpAddrCc = (string)$corpAddrCc;
        return $this;
    }
}
