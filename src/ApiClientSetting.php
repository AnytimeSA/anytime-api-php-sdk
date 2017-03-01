<?php

namespace Anytime\ApiClient;

use Anytime\ApiClient\Constant\Environment;

class ApiClientSetting
{
    /**
     * @var string
     */
    private $scheme = 'https';

    /**
     * @var string
     */
    private $userInfo = '';

    /**
     * @var string
     */
    private $domain = '';

    /**
     * @var string
     */
    private $basePath = '/';

    /**
     * @var integer
     */
    private $port = 443;

    /**
     * @var string
     */
    private $apiVersion = '1.0';

    /**
     * @var string
     */
    private $oAuth2ClientId = '';

    /**
     * @var string
     */
    private $oAuth2ClientSecret = '';

    /**
     * @var string
     */
    private $oAuth2GrantType = 'password';

    /**
     * @var string
     */
    private $oAuth2Username = '';

    /**
     * @var string
     */
    private $oAuth2Password = '';

    /**
     * @var string
     */
    private $oAuth2AccessToken = '';

    /**
     * @var string
     */
    private $privateRSAKey = '';

    /**
     * ApiClientSetting constructor.
     * @param string $environment
     */
    public function __construct($environment = Environment::SANDBOX)
    {
        $this->setScheme(Environment::SETTINGS[$environment]['scheme']);
        $this->setUserInfo(Environment::SETTINGS[$environment]['user-info']);
        $this->setDomain(Environment::SETTINGS[$environment]['domain']);
        $this->setBasePath(Environment::SETTINGS[$environment]['base-path']);
        $this->setPort(Environment::SETTINGS[$environment]['port']);
    }

    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @param string $scheme
     * @return ApiClientSetting
     */
    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserInfo()
    {
        return $this->userInfo;
    }

    /**
     * @param string $userInfo
     * @return ApiClientSetting
     */
    public function setUserInfo($userInfo)
    {
        $this->userInfo = $userInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return ApiClientSetting
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * @param string $basePath
     * @return ApiClientSetting
     */
    public function setBasePath($basePath)
    {
        $this->basePath = $basePath;
        return $this;
    }

    /**
     * @return integer
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param integer $port
     * @return ApiClientSetting
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * @param string $apiVersion
     * @return ApiClientSetting
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getOAuth2ClientId()
    {
        return $this->oAuth2ClientId;
    }

    /**
     * @param string $oAuth2ClientId
     * @return ApiClientSetting
     */
    public function setOAuth2ClientId($oAuth2ClientId)
    {
        $this->oAuth2ClientId = $oAuth2ClientId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOAuth2ClientSecret()
    {
        return $this->oAuth2ClientSecret;
    }

    /**
     * @param string $oAuth2ClientSecret
     * @return ApiClientSetting
     */
    public function setOAuth2ClientSecret($oAuth2ClientSecret)
    {
        $this->oAuth2ClientSecret = $oAuth2ClientSecret;
        return $this;
    }

    /**
     * @return string
     */
    public function getOAuth2GrantType()
    {
        return $this->oAuth2GrantType;
    }

    /**
     * @param string $oAuth2GrantType
     * @return ApiClientSetting
     */
    public function setOAuth2GrantType($oAuth2GrantType)
    {
        $this->oAuth2GrantType = $oAuth2GrantType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOAuth2Username()
    {
        return $this->oAuth2Username;
    }

    /**
     * @param string $oAuth2Username
     * @return ApiClientSetting
     */
    public function setOAuth2Username($oAuth2Username)
    {
        $this->oAuth2Username = $oAuth2Username;
        return $this;
    }

    /**
     * @return string
     */
    public function getOAuth2Password()
    {
        return $this->oAuth2Password;
    }

    /**
     * @param string $oAuth2Password
     * @return ApiClientSetting
     */
    public function setOAuth2Password($oAuth2Password)
    {
        $this->oAuth2Password = $oAuth2Password;
        return $this;
    }

    /**
     * @return string
     */
    public function getOAuth2AccessToken()
    {
        return $this->oAuth2AccessToken;
    }

    /**
     * @param string $oAuth2AccessToken
     * @return ApiClientSetting
     */
    public function setOAuth2AccessToken($oAuth2AccessToken)
    {
        $this->oAuth2AccessToken = $oAuth2AccessToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrivateRSAKey()
    {
        return $this->privateRSAKey;
    }

    /**
     * @param string $privateRSAKey
     * @return ApiClientSetting
     */
    public function setPrivateRSAKey($privateRSAKey)
    {
        $this->privateRSAKey = $privateRSAKey;
        return $this;
    }

}