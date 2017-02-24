<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostCardSendPan extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getState()
    {
        return $this->getDataValue('state');
    }
}