<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\ApiClientSetting;
use Anytime\ApiClient\Builder\RequestBuilder\RequestDirectorFactory;
use Anytime\ApiClient\Exception\ApiClientException\ApiClientException;
use Anytime\ApiClient\Exception\ApiClientException\Factory\ApiClientExceptionFactory;
use Anytime\ApiClient\Model\Populator\ModelResponsePopulatorInterface;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetApiCheck;
use Anytime\ApiClient\Model\Request\ModelRequestFactory;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Response\ModelResponseFactory;
use Anytime\ApiClient\Model\Response\ModelResponseInterface;
use Anytime\ApiClient\Parser\ParserInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

abstract class IO
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var ApiClientSetting
     */
    protected $setting;

    /**
     * @var ModelRequestFactory
     */
    protected $modelRequestFactory;

    /**
     * @var ModelResponseFactory
     */
    protected $modelResponseFactory;

    /**
     * @var RequestDirectorFactory
     */
    protected $requestDirectorFactory;

    /**
     * @var ApiClientExceptionFactory
     */
    protected $apiClientExceptionFactory;

    /**
     * @var ModelResponsePopulatorInterface
     */
    protected $modelResponsePopulator;

    /**
     * @var ParserInterface
     */
    protected $responseParser;

    /**
     * IO constructor.
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
     * @param string $method
     * @param string $apiName
     * @return ModelRequestGetApiCheck
     */
    protected function createRequestByMethodAndApi($method, $apiName)
    {
        return $this->modelRequestFactory->create($method, $apiName);
    }

    /**
     * @param ModelRequestInterface $modelRequest
     * @return ModelResponseInterface
     */
    public function sendRequest(ModelRequestInterface $modelRequest)
    {
        return $this->send($modelRequest);
    }

    /**
     * @param ModelRequestInterface $modelRequest
     * @throws ApiClientException
     * @return ModelResponseInterface
     */
    protected function send(ModelRequestInterface $modelRequest)
    {
        $request = $this->buildRequest($modelRequest);
        try {
            $response = $this->client->send($request);

            $modelResponse = $this->modelResponseFactory->create(
                $modelRequest->getMethod(),
                $modelRequest->getApiName()
            );

            return $this->modelResponsePopulator->populate(
                $modelResponse,
                $this->responseParser->parse($response->getBody()->getContents())
            );

        } catch(BadResponseException $e) {
            throw $this->apiClientExceptionFactory->create($e);
        }
    }

    /**
     * @param ModelRequestInterface $modelRequest
     * @return Request
     */
    protected function buildRequest(ModelRequestInterface $modelRequest)
    {
        $director = $this->requestDirectorFactory->create(
            $modelRequest->getMethod(),
            $modelRequest->getApiName()
        );
        $request = $director->buildRequest()->getRequest($modelRequest);
        $request = $request->withHeader('Authorization', 'Bearer ' . $this->setting->getOAuth2AccessToken());
        return $request;
    }
}