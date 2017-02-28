<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostApiCheckPost extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getTestParam()
    {
        return (string)$this->getDataValue('test_param');
    }
}