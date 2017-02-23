<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;


use Anytime\ApiClient\ApiClientSetting;
use Anytime\ApiClient\Constant\Method;
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
     * @return Request
     */
    public function createRequestObject($method, $fullUrl, array $formData = [], array $headers = [])
    {
        if($method === Method::GET) {

            return new Request(
                $method,
                $fullUrl,
                $headers
            );

        } else {
            if(count($headers) < 1) {
                $headers = [
                    'Content-type' => 'application/x-www-form-urlencoded'
                ];
            }

            return new Request(
                $method,
                $fullUrl,
                $headers,
                http_build_query($formData, '', '&amp;')
            );
        }
    }

    /**
     * @param ModelRequest $modelRequest
     * @return RequestSignerInterface
     */
    public function getSignedRequest(ModelRequest $modelRequest)
    {
        return $this->requestSigner->sign(
            $this->getRequest($modelRequest),
            $this->setting->getPrivateRSAKey());
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
     * @return string
     */
    public function getFullUrl($uri)
    {
        $userInfo = $this->setting->getUserInfo();
        $port = $this->setting->getPort();
        return
            $this->setting->getScheme() . '://' .
            (empty($userInfo) ? '' : $userInfo . '@') .
            $this->setting->getDomain() .
            (empty($port) ? '' : ':' . $port) .
            $this->setting->getBasePath() .
            $this->setting->getApiVersion() . '/' .
            $uri
        ;
    }


}