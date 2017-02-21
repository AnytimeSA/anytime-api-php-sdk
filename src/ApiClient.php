<?php

namespace Anytime\ApiClient;

use Anytime\ApiClient\ApiContainer\ApiContainerInterface;
use Anytime\ApiClient\ApiContainer\GetApiContainer;
use Anytime\ApiClient\ApiContainer\PostApiContainer;
use Anytime\ApiClient\ApiContainer\PutApiContainer;
use Anytime\ApiClient\Builder\RequestBuilder\RequestDirectorFactory;
use Anytime\ApiClient\Exception\ApiClientException\Factory\ApiClientExceptionFactory;
use Anytime\ApiClient\Model\Factory\ModelFactory;
use Anytime\ApiClient\Model\Request\ModelRequest;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;

class ApiClient
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
     * @var ModelFactory
     */
    private $modelFactory;

    /**
     * @var RequestDirectorFactory
     */
    private $requestDirectorFactory;

    /**
     * @var ApiClientExceptionFactory
     */
    private $apiClientExceptionFactory;

    /**
     * @var GetApiContainer
     */
    private $get;

    /**
     * @var PostApiContainer
     */
    private $post;

    /**
     * @var PutApiContainer
     */
    private $put;

    /**
     * @var string
     */
    private $currentToken = '';


    /**
     * ApiClient constructor.
     * @param Client $client
     * @param ApiClientSetting $setting
     * @param ModelFactory $modelFactory
     * @param RequestDirectorFactory $requestDirectorFactory
     * @param ApiClientExceptionFactory $apiClientExceptionFactory
     * @param ApiContainerInterface $get
     * @param ApiContainerInterface $post
     * @param ApiContainerInterface $put
     */
    public function __construct(
        Client $client,
        ApiClientSetting $setting,
        ModelFactory $modelFactory,
        RequestDirectorFactory $requestDirectorFactory,
        ApiClientExceptionFactory $apiClientExceptionFactory,
        ApiContainerInterface $get,
        ApiContainerInterface $post,
        ApiContainerInterface $put
    )
    {
        $this->client = $client;
        $this->setting = $setting;
        $this->modelFactory = $modelFactory;
        $this->requestDirectorFactory = $requestDirectorFactory;
        $this->apiClientExceptionFactory = $apiClientExceptionFactory;
        $this->get = $get;
        $this->post = $post;
        $this->put = $put;
    }

    /**
     * @return ApiClientSetting
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * @return string
     */
    public function createToken()
    {
    }

    /**
     * @param string $token
     * @return ApiClient
     */
    public function initToken($token)
    {
        $this->currentToken = $token;
        return $this;
    }

    /**
     * @param $token
     * @return bool
     */
    public function revokeToken($token)
    {
    }

    /**
     * @return string
     */
    public function getCurrentToken()
    {
        return $this->currentToken;
    }

    /**
     * @return GetApiContainer
     */
    public function get()
    {
        return $this->get;
    }

    /**
     * @return PostApiContainer
     */
    public function post()
    {
        return $this->post;
    }

    /**
     * @return PutApiContainer
     */
    public function put()
    {
        return $this->put;
    }

    /**
     * @param ModelRequest $modelRequest
     * @throws Exception\ApiClientException\ApiClientException
     */
    public function send(ModelRequest $modelRequest)
    {
        $request = $this->createRequest($modelRequest);
        try {
            $response = $this->client->send($request);
            echo json_encode($response->getBody()->getContents());
        } catch(BadResponseException $e) {
            throw $this->apiClientExceptionFactory->create($e);
        }
    }

    /**
     * @param ModelRequest $modelRequest
     * @return Request
     */
    public function createRequest(ModelRequest $modelRequest)
    {
        $director = $this->requestDirectorFactory->create(
            $modelRequest->getMethod(),
            $modelRequest->getApiName()
        );
        $request = $director->buildRequest()->getRequest($modelRequest);
        $request = $request->withHeader('Authorization', 'Bearer ' . $this->currentToken);
        return $request;
    }

}