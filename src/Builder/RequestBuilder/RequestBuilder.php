<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;


use Anytime\ApiClient\ApiClientSetting;
use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\RequestSigner\RequestSignerInterface;
use GuzzleHttp\Psr7\Request;

abstract class RequestBuilder
{
    /**
     * @var ApiClientSetting
     */
    private $setting;

    /**
     * @var RequestSignerInterface
     */
    private $requestSigner;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var array
     */
    protected $preBuiltData = [];

    /**
     * RequestBuilder constructor.
     *
     * @param ApiClientSetting $setting
     * @param RequestSignerInterface $requestSigner
     */
    public function __construct(ApiClientSetting $setting, RequestSignerInterface $requestSigner)
    {
        $this->setting = $setting;
        $this->requestSigner = $requestSigner;
    }

    /**
     * @param ModelRequest $modelRequest
     */
    abstract public function getRequest(ModelRequest $modelRequest);

    /**
     * @param string $method
     * @param $fullUrl
     * @param array $formData
     * @param array $headers
     * @param array $files
     * @return IORequest
     */
    public function createRequestObject($method, $fullUrl, array $formData = [], array $headers = [], array $files = [])
    {
        $request = (new IORequest())
            ->setMethod($method)
            ->setUrl($fullUrl)
            ->setFormData($formData)
            ->setHeaders($headers)
            ->setFiles($files)
        ;
        return $request;
    }

    /**
     * @param ModelRequest $modelRequest
     * @return IORequest
     */
    public function getSignedRequest(ModelRequest $modelRequest)
    {
        return $this->requestSigner->sign(
            $this->getRequest($modelRequest),
            $this->setting->getPrivateRSAKey()
        );
    }

    /**
     * @param $uri
     */
    public function setUri($uri)
    {
        $this->preBuiltData['uri'] = $uri;
    }

    /**
     * @param string $uri
     * @param bool $withVersion
     * @return string
     */
    public function getFullUrl($uri, $withVersion = true)
    {
        $userInfo = $this->setting->getUserInfo();
        $port = $this->setting->getPort();
        return
            $this->setting->getScheme() . '://' .
            (empty($userInfo) ? '' : $userInfo . '@') .
            $this->setting->getDomain() .
            (empty($port) ? '' : ':' . $port) .
            $this->setting->getBasePath() .
            ($withVersion ? $this->setting->getApiVersion() . '/' : '') .
            $uri
        ;
    }


}