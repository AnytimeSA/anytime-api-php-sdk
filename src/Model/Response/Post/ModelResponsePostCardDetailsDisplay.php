<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostCardDetailsDisplay extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getTempLink()
    {
        return $this->getDataValue('temp_link');
    }
}