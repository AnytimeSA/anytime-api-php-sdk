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
     * @return string
     */
    public function generateToken()
    {
        $request = $this->api()->oauth2Token()->createRequest()
            ->setGrantType($this->setting->getOAuth2GrantType())
            ->setClientId($this->setting->getOAuth2ClientId())
            ->setClientSecret($this->setting->getOAuth2ClientSecret())
            ->setUsername($this->setting->getOAuth2Username())
            ->setPassword($this->setting->getOAuth2Password())
        ;
        $token = $this->api()->oauth2Token()->sendRequest($request)->getAccessToken();

        $this->initToken($token);

        return $token;
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
