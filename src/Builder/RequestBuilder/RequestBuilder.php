<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;


use Anytime\ApiClient\ApiClientSetting;
use Anytime\ApiClient\IO\FileReader\FileReaderInterface;
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
     * @var FileReaderInterface
     */
    private $fileReader;

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
     * @param FileReaderInterface $fileReader
     * @param RequestSignerInterface $requestSigner
     */
    public function __construct(ApiClientSetting $setting, FileReaderInterface $fileReader, RequestSignerInterface $requestSigner)
    {
        $this->setting = $setting;
        $this->requestSigner = $requestSigner;
        $this->fileReader = $fileReader;
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
    public function createIORequestObject($method, $fullUrl, array $formData = [], array $headers = [], array $files = [])
    {
        $request = (new IORequest($this->fileReader))
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
        $basePath = ($this->setting->getBasePath() ? $this->setting->getBasePath() : '/');
        if(($this->setting->getScheme() === 'https' && $port === 443) || ($this->setting->getScheme() === 'http' && $port === 80)) {
            $port = null;
        }

        return
            $this->setting->getScheme() . '://' .
            (empty($userInfo) ? '' : $userInfo . '@') .
            $this->setting->getDomain() .
            (empty($port) ? '' : ':' . $port) .
            $basePath .
            ($withVersion ? $this->setting->getApiVersion() . '/' : '') .
            $uri
        ;
    }

    /**
     * @param array $data
     * @return array
     */
    public function filterNullParams(array $data)
    {
        return array_filter(
            $data,
            function($var) {
                return !is_null($var);
            }
        );
    }

}