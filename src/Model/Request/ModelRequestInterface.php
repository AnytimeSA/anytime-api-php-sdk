<?php

namespace Anytime\ApiClient\Model\Request;

interface ModelRequestInterface
{
    /**
     * @return string
     */
    public function getMethod();

    /**
     * @return string
     */
    public function getApiName();
}