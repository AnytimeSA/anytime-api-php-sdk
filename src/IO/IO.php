<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\ApiClientSetting;
use Anytime\ApiClient\Authenticator\AuthenticatorInterface;
use Anytime\ApiClient\Builder\RequestBuilder\RequestDirectorFactory;
use Anytime\ApiClient\Exception\ApiClientException\ApiClientException;
use Anytime\ApiClient\Exception\ApiClientException\Factory\ApiClientExceptionFactory;
use Anytime\ApiClient\Model\Populator\ModelResponsePopulatorInterface;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGet;
use Anytime\ApiClient\Model\Request\ModelRequestFactory;
use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use Anytime\ApiClient\Model\Response\ModelResponseFactory;
use Anytime\ApiClient\Model\Response\ModelResponseInterface;
use Anytime\ApiClient\Parser\ParserInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ConnectException;

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
    protected $jsonResponseParser;

    /**
     * @var ParserInterface
     */
    protected $binaryResponseParser;

    /**
     * @var AuthenticatorInterface
     */
    protected $responseAuthenticator;

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
     * @param ParserInterface $jsonResponseParser
     * @param ParserInterface $binaryResponseParser
     * @param AuthenticatorInterface $responseAuthenticator
     */
    public function __construct(
        Client $client,
        ApiClientSetting $setting,
        ModelRequestFactory $modelRequestFactory,
        ModelResponseFactory $modelResponseFactory,
        RequestDirectorFactory $requestDirectorFactory,
        ApiClientExceptionFactory $apiClientExceptionFactory,
        ModelResponsePopulatorInterface $modelResponsePopulator,
        ParserInterface $jsonResponseParser,
        ParserInterface $binaryResponseParser,
        AuthenticatorInterface $responseAuthenticator
    )
    {
        $this->client = $client;
        $this->setting = $setting;
        $this->modelRequestFactory = $modelRequestFactory;
        $this->modelResponseFactory = $modelResponseFactory;
        $this->requestDirectorFactory = $requestDirectorFactory;
        $this->apiClientExceptionFactory = $apiClientExceptionFactory;
        $this->modelResponsePopulator = $modelResponsePopulator;
        $this->jsonResponseParser = $jsonResponseParser;
        $this->binaryResponseParser = $binaryResponseParser;
        $this->responseAuthenticator = $responseAuthenticator;
    }

    /**
     * @param ModelRequestInterface $modelRequest
     * @return ModelResponseInterface
     * @throws ApiClientException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendRequest(ModelRequestInterface $modelRequest)
    {
        $modelResponse = $this->send($modelRequest);

        $isResponseAuthenticated = $this->responseAuthenticator->authenticate([
            'hash'          =>  $modelResponse->getHeader()->getHash(),
            'username'      =>  $this->setting->getOAuth2Username(),
            'timestamp'     =>  $modelResponse->getHeader()->getTimestamp()
        ]);

        $modelResponse->setAuthenticated($isResponseAuthenticated);

        return $modelResponse;
    }

    /**
     * @param ModelRequestInterface $modelRequest
     * @throws ApiClientException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return ModelResponseInterface
     */
    protected function send(ModelRequestInterface $modelRequest)
    {
        $IORequest = $this->buildRequest($modelRequest);

        try {
            $response = $this->client->request(
                $IORequest->getMethod(),
                $IORequest->getUrl(),
                $IORequest->getRequestArrangedOptions()
            );

            $modelResponse = $this->modelResponseFactory->create($modelRequest);


            if($modelResponse->getResponseFormat() == 'binary') {
                $parser = $this->binaryResponseParser;
            } else {
                $parser = $this->jsonResponseParser;
            }

            return $this->modelResponsePopulator->populate(
                $modelResponse,
                $parser->parse((string) $response->getBody())
            );

        } catch(BadResponseException $e) {
            throw $this->apiClientExceptionFactory->createResponseException($e, $modelRequest);
        } catch(ConnectException $e) {
            throw $this->apiClientExceptionFactory->createConnectException($e);
        }
    }

    /**
     * @param ModelRequestInterface $modelRequest
     * @return IORequest
     */
    protected function buildRequest(ModelRequestInterface $modelRequest)
    {
        return $this
            ->requestDirectorFactory
            ->create($modelRequest->getMethod(), $modelRequest->getApiName())
            ->buildRequest($modelRequest)
            ->getRequest($modelRequest)
            ->addHeader('Authorization', 'Bearer ' . $this->setting->getOAuth2AccessToken()
        );
    }

    /**
     * @param string $method
     * @param string $apiName
     * @return ModelRequestGet
     */
    protected function createRequestByMethodAndApi($method, $apiName)
    {
        return $this->modelRequestFactory->create($method, $apiName);
    }
}
