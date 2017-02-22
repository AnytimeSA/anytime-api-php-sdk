<?php

namespace Anytime\ApiClient;

use Anytime\ApiClient\IO\IOList;

class ApiClient
{
    /**
     * @var ApiClientSetting
     */
    private $setting;

    /**
     * @var IOList
     */
    private $IOList;

    /**
     * ApiClient constructor.
     * @param ApiClientSetting $setting
     * @param IOList $IOList
     */
    public function __construct(
        ApiClientSetting $setting,
        IOList $IOList
    )
    {
        $this->setting = $setting;
        $this->IOList = $IOList;
    }

    /**
     * @return ApiClientSetting
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * @param string $token
     * @return ApiClient
     */
    public function initToken($token)
    {
        $this->setting->setOAuth2AccessToken($token);
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentToken()
    {
        return $this->setting->getOAuth2AccessToken();
    }

    /**
     * @return IOList
     */
    public function api()
    {
        return $this->IOList;
    }

}