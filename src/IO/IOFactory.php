<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\ApiClientSetting;
use Anytime\ApiClient\Builder\RequestBuilder\RequestDirectorFactory;
use Anytime\ApiClient\Exception\ApiClientException\Factory\ApiClientExceptionFactory;
use Anytime\ApiClient\Model\Populator\ModelResponsePopulatorInterface;
use Anytime\ApiClient\Model\Request\ModelRequestFactory;
use Anytime\ApiClient\Model\Response\ModelResponseFactory;
use Anytime\ApiClient\Parser\ParserInterface;
use GuzzleHttp\Client;

class IOFactory
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var ApiClientSetting
     */
    private $setting;

    /**
     * @var ModelRequestFactory
     */
    private $modelRequestFactory;

    /**
     * @var ModelResponseFactory
     */
    private $modelResponseFactory;

    /**
     * @var RequestDirectorFactory
     */
    private $requestDirectorFactory;

    /**
     * @var ApiClientExceptionFactory
     */
    private $apiClientExceptionFactory;

    /**
     * @var ModelResponsePopulatorInterface
     */
    private $modelResponsePopulator;

    /**
     * @var ParserInterface
     */
    private $responseParser;

    /**
     * IOFactory constructor.
     *
     * @param Client $client
     * @param ApiClientSetting $setting
     * @param ModelRequestFactory $modelRequestFactory
     * @param ModelResponseFactory $modelResponseFactory
     * @param RequestDirectorFactory $requestDirectorFactory
     * @param ApiClientExceptionFactory $apiClientExceptionFactory
     * @param ModelResponsePopulatorInterface $modelResponsePopulator
     * @param ParserInterface $responseParser
     */
    public function __construct(
        Client $client,
        ApiClientSetting $setting,
        ModelRequestFactory $modelRequestFactory,
        ModelResponseFactory $modelResponseFactory,
        RequestDirectorFactory $requestDirectorFactory,
        ApiClientExceptionFactory $apiClientExceptionFactory,
        ModelResponsePopulatorInterface $modelResponsePopulator,
        ParserInterface $responseParser
    )
    {
        $this->client = $client;
        $this->setting = $setting;
        $this->modelRequestFactory = $modelRequestFactory;
        $this->modelResponseFactory = $modelResponseFactory;
        $this->requestDirectorFactory = $requestDirectorFactory;
        $this->apiClientExceptionFactory = $apiClientExceptionFactory;
        $this->modelResponsePopulator = $modelResponsePopulator;
        $this->responseParser = $responseParser;
    }

    /**
     * @param string $apiName
     * @return IOInterface
     */
    public function create($apiName)
    {
        $class = __NAMESPACE__ . '\\' . $apiName . 'IO';

        if(class_exists($class)) {
            return new $class(
                $this->client,
                $this->setting,
                $this->modelRequestFactory,
                $this->modelResponseFactory,
                $this->requestDirectorFactory,
                $this->apiClientExceptionFactory,
                $this->modelResponsePopulator,
                $this->responseParser
            );
        }

        throw new \RuntimeException('Class "'.$class.'" not found');
    }

}