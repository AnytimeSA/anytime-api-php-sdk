<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostOAuth2Token extends ModelRequestPost
{

    /**
     * @var string
     */
    private $grantType;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;


    /**
     * @return string
     */
    public function getApiName()
    {
        return API::OAUTH2_TOKEN;
    }

    /**
     * @return string
     */
    public function getGrantType()
    {
        return $this->grantType;
    }

    /**
     * @param string $grantType
     * @return ModelRequestPostOAuth2Token
     */
    public function setGrantType($grantType)
    {
        $this->grantType = (string)$grantType;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     * @return ModelRequestPostOAuth2Token
     */
    public function setClientId($clientId)
    {
        $this->clientId = (string)$clientId;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @param string $clientSecret
     * @return ModelRequestPostOAuth2Token
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = (string)$clientSecret;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return ModelRequestPostOAuth2Token
     */
    public function setUsername($username)
    {
        $this->username = (string)$username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return ModelRequestPostOAuth2Token
     */
    public function setPassword($password)
    {
        $this->password = (string)$password;
        return $this;
    }
}
