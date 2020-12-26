<?php

namespace Anytime\ApiClient\Model\Response;

interface ModelResponseInterface
{
    /**
     * @return ModelResponseHeader
     */
    public function getHeader();
}
