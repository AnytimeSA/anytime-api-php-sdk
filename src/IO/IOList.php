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
    public function apicheck()
    {
        return $this->IOFactory->create(API::APICHECK);
    }
}