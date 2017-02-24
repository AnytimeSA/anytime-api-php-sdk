<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;

class IOList
{
    /**
     * @var IOFactory
     */
    protected $IOFactory;

    /**
     * IOList constructor.
     *
     * @param IOFactory $IOFactory
     */
    public function __construct(IOFactory $IOFactory)
    {
        $this->IOFactory = $IOFactory;
    }

    /**
     * @return ApiCheckIO
     */
    public function apiCheck()
    {
        return $this->IOFactory->create(API::APICHECK);
    }

    /**
     * @return ApiCheckPostIO
     */
    public function apiCheckPost()
    {
        return $this->IOFactory->create(API::APICHECK_POST);
    }

    /**
     * @return AccountListIO
     */
    public function apiAccountList()
    {
        return $this->IOFactory->create(API::ACCOUNT_LIST);
    }

    /**
     * @return AccountInfoIO
     */
    public function apiAccountInfo()
    {
        return $this->IOFactory->create(API::ACCOUNT_INFO);
    }

    /**
     * @return AccountCardListIO
     */
    public function apiAccountCardList()
    {
        return $this->IOFactory->create(API::ACCOUNT_CARD_LIST);
    }

    /**
     * @return OAuth2TokenIO
     */
    public function apiOAuth2Token()
    {
        return $this->IOFactory->create(API::OAUTH2_TOKEN);
    }


}