<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountInfo extends ModelResponseGet
{
    /**
     * @return integer
     */
    public function getAccId()
    {
        return (int)$this->getDataValue('acc_id');
    }

    /**
     * @return string
     */
    public function getAccType()
    {
        return (string)$this->getDataValue('acc_type');
    }

    /**
     * @return string
     */
    public function getAccCurrency()
    {
        return (string)$this->getDataValue('acc_currency');
    }

    /**
     * @return string
     */
    public function getCorpName()
    {
        return (string)$this->getDataValue('corp_name');
    }

    /**
     * @return string
     */
    public function getCorpRegnum()
    {
        return (string)$this->getDataValue('corp_regnum');
    }

    /**
     * @return string
     */
    public function getCorpType()
    {
        return (string)$this->getDataValue('corp_type');
    }

    /**
     * @return string
     */
    public function getCorpActivity()
    {
        return (string)$this->getDataValue('corp_activity');
    }

    /**
     * @return string
     */
    public function getCorpTva()
    {
        return (string)$this->getDataValue('corp_tva');
    }

    /**
     * @return string
     * @deprecated
     */
    public function getCorpAddrLine1()
    {
        return (string)$this->getDataValue('corp_addr_1');
    }

    /**
     * @return string
     */
    public function getCorpAddr1()
    {
        return (string)$this->getDataValue('corp_addr_1');
    }

    /**
     * @return string
     * @deprecated
     */
    public function getCorpAddrLine2()
    {
        return (string)$this->getDataValue('corp_addr_2');
    }

    /**
     * @return string
     */
    public function getCorpAddr2()
    {
        return (string)$this->getDataValue('corp_addr_2');
    }

    /**
     * @return string
     */
    public function getCorpAddrZip()
    {
        return (string)$this->getDataValue('corp_zip');
    }

    /**
     * @return string
     */
    public function getCorpAddrCity()
    {
        return (string)$this->getDataValue('corp_city');
    }

    /**
     * @return string
     */
    public function getCorpAddrCc()
    {
        return (string)$this->getDataValue('corp_cc');
    }

    /**
     * @return string
     */
    public function getUserGender()
    {
        return (string)$this->getDataValue('user_gender');
    }

    /**
     * @return string
     */
    public function getUserFirstName()
    {
        return (string)$this->getDataValue('user_first_name');
    }

    /**
     * @return string
     */
    public function getUserLastName()
    {
        return (string)$this->getDataValue('user_last_name');
    }

    /**
     * @return \DateTime
     */
    public function getUserDob()
    {
        return $this->timezoneNormalizer->normalize($this->getDataValue('user_dob'));
    }

    /**
     * @return string
     */
    public function getUserPob()
    {
        return (string)$this->getDataValue('user_pob');
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
        return (string)$this->getDataValue('user_email');
    }

    /**
     * @return string
     */
    public function getUserMobileNumber()
    {
        return (string)$this->getDataValue('user_mobile_number');
    }

    /**
     * @return string
     * @deprecated
     */
    public function getUserAddrLine1()
    {
        return (string)$this->getDataValue('user_addr_1');
    }

    /**
     * @return string
     */
    public function getUserAddr1()
    {
        return (string)$this->getDataValue('user_addr_1');
    }

    /**
     * @return string
     * @deprecated
     */
    public function getUserAddrLine2()
    {
        return (string)$this->getDataValue('user_addr_2');
    }

    /**
     * @return string
     */
    public function getUserAddr2()
    {
        return (string)$this->getDataValue('user_addr_2');
    }

    /**
     * @return string
     */
    public function getUserAddrZip()
    {
        return (string)$this->getDataValue('user_addr_zip');
    }

    /**
     * @return string
     */
    public function getUserAddrCity()
    {
        return (string)$this->getDataValue('user_addr_city');
    }

    /**
     * @return string
     */
    public function getUserAddrCc()
    {
        return (string)$this->getDataValue('user_addr_cc');
    }

    /**
     * @return string
     */
    public function getUserNationality()
    {
        return (string)$this->getDataValue('user_nationality');
    }

}