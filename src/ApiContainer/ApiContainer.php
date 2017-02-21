<?php

namespace Anytime\ApiClient\ApiContainer;

use Anytime\ApiClient\Model\Request\ModelRequestFactory;

abstract class ApiContainer implements ApiContainerInterface
{
    /**
     * @var ModelRequestFactory
     */
    protected $modelRequestFactory;

    /**
     * ApiContainer constructor.
     *
     * @param ModelRequestFactory $modelRequestFactory
     */
    public function __construct(ModelRequestFactory $modelRequestFactory)
    {
        $this->modelRequestFactory = $modelRequestFactory;
    }
}