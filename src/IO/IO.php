<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\ApiClientSetting;
use Anytime\ApiClient\Builder\RequestBuilder\RequestDirectorFactory;
use Anytime\ApiClient\Exception\ApiClientException\ApiClientException;
use Anytime\ApiClient\Exception\ApiClientException\Factory\ApiClientExceptionFactory;
use Anytime\ApiClient\Model\Populator\ModelResponsePopulatorInterface;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\ModelRequestFactory;
use Anytime\ApiClient\Model\Response\ModelResponse;
use Anytime\ApiClient\Model\Response\ModelResponseFactory;
use Anytime\ApiClient\Parser\ParserInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

abstract class IO implements IOInterface
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
     * @param ModelRequest $modelRequest
     * @throws ApiClientException
     * @return ModelResponse
     */
    protected function send(ModelRequest $modelRequest)
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
     * @param ModelRequest $modelRequest
     * @return Request
     */
    protected function buildRequest(ModelRequest $modelRequest)
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