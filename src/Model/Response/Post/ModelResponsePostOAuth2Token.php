<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostOAuth2Token extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getAccessToken()
    {
        return (string)$this->getDataValue('access_token');
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return (string)$this->getDataValue('refresh_token');
    }

    /**
     * @return string
     */
    public function getTokenType()
    {
        return (string)$this->getDataValue('token_type');
    }
}