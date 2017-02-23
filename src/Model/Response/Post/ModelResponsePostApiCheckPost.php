<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostApiCheckPost extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getTestParam()
    {
        return $this->getDataValue('test_param');
    }
}