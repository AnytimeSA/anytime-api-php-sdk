<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostApiCheckPost extends ModelRequestPost
{
    /**
     * @var string
     */
    private $testParam;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::APICHECK_POST;
    }

    /**
     * @return string
     */
    public function getTestParam()
    {
        return $this->testParam;
    }

    /**
     * @param string $testParam
     * @return ModelRequestPostApiCheckPost
     */
    public function setTestParam($testParam)
    {
        $this->testParam = $testParam;
        return $this;
    }

}