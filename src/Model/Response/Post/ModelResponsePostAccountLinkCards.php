<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostAccountLinkCards extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getStatus()
    {
        return (string)$this->getDataValue('status');
    }
}