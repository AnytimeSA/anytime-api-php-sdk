<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Response\ModelResponseInterface;

interface IOInterface
{
    /**
     * @return ModelRequestInterface
     */
    public function createRequest();

    /**
     * @param ModelRequestInterface $request
     * @return ModelResponseInterface
     */
    public function sendRequest(ModelRequestInterface $request);
}