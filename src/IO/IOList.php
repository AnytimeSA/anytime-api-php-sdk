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


}