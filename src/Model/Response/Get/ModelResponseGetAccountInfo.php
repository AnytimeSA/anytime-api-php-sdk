<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountInfo extends ModelResponseGet
{
    /**
     * @return integer
     */
    public function getAccId()
    {
        return $this->getDataValue('acc_id');
    }

    /**
     * @return string
     */
    public function getAccType()
    {
        return $this->getDataValue('acc_type');
    }

    /**
     * @return string
     */
    public function getAccCurrency()
    {
        return $this->getDataValue('acc_currency');
    }

    /**
     * @return string
     */
    public function getCorpName()
    {
        return $this->getDataValue('corp_name');
    }

    /**
     * @return string
     */
    public function getCorpRegnum()
    {
        return $this->getDataValue('corp_regnum');
    }

    /**
     * @return string
     */
    public function getCorpType()
    {
        return $this->getDataValue('corp_type');
    }

    /**
     * @return string
     */
    public function getCorpActivity()
    {
        return $this->getDataValue('corp_activity');
    }

    /**
     * @return string
     */
    public function getCorpTva()
    {
        return $this->getDataValue('corp_tva');
    }

    /**
     * @return string
     */
    public function getCorpAddrLine1()
    {
        return $this->getDataValue('corp_addr_line1');
    }

    /**
     * @return string
     */
    public function getCorpAddrLine2()
    {
        return $this->getDataValue('corp_addr_line2');
    }

    /**
     * @return string
     */
    public function getCorpAddrZip()
    {
        return $this->getDataValue('corp_addr_zip');
    }

    /**
     * @return string
     */
    public function getCorpAddrCity()
    {
        return $this->getDataValue('corp_addr_city');
    }

    /**
     * @return string
     */
    public function getCorpAddrCc()
    {
        return $this->getDataValue('corp_addr_cc');
    }

    /**
     * @return string
     */
    public function getUserGender()
    {
        return $this->getDataValue('user_gender');
    }

    /**
     * @return string
     */
    public function getUserFirstName()
    {
        return $this->getDataValue('user_first_name');
    }

    /**
     * @return string
     */
    public function getUserLastName()
    {
        return $this->getDataValue('user_last_name');
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
        return $this->getDataValue('user_pob');
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
        return $this->getDataValue('user_email');
    }

    /**
     * @return string
     */
    public function getUserMobileNumber()
    {
        return $this->getDataValue('user_mobile_number');
    }

    /**
     * @return string
     */
    public function getUserAddrLine1()
    {
        return $this->getDataValue('user_addr_line1');
    }

    /**
     * @return string
     */
    public function getUserAddrLine2()
    {
        return $this->getDataValue('user_addr_line2');
    }

    /**
     * @return string
     */
    public function getUserAddrZip()
    {
        return $this->getDataValue('user_addr_zip');
    }

    /**
     * @return string
     */
    public function getUserAddrCity()
    {
        return $this->getDataValue('user_addr_city');
    }

    /**
     * @return string
     */
    public function getUserAddrCc()
    {
        return $this->getDataValue('user_addr_cc');
    }

    /**
     * @return string
     */
    public function getUserNationality()
    {
        return $this->getDataValue('user_nationality');
    }

}