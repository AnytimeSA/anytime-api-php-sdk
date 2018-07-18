<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\ApiClientSetting;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\IO\FileReader\DiskFileReader;
use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetApiCheck;
use Anytime\ApiClient\RequestSigner\OpenSslRequestSigner;
use Xpmock\TestCase;

class RequestBuilderTest extends TestCase
{
    /**
     * @group RequestBuilder
     */
    public function testGetFullURLReturnsCorrectStringRegardingTheSettings()
    {
        $this->assertSame('https://user:pass@domain.tld/base/path/test/v1.0/testuri', $this->getGetRequestBuilder('https', 'domain.tld', 443, '/base/path/test/', 'v1.0', 'user:pass')->getFullUrl('testuri'));
        $this->assertSame('http://user:pass@domain.tld:443/base/path/test/v1.0/testuri', $this->getGetRequestBuilder('http', 'domain.tld', 443, '/base/path/test/', 'v1.0', 'user:pass')->getFullUrl('testuri'));
        $this->assertSame('http://user:pass@domain.tld/base/path/test/v1.0/testuri', $this->getGetRequestBuilder('http', 'domain.tld', 80, '/base/path/test/', 'v1.0', 'user:pass')->getFullUrl('testuri'));
        $this->assertSame('https://user:pass@domain.tld:80/base/path/test/v1.0/testuri', $this->getGetRequestBuilder('https', 'domain.tld', 80, '/base/path/test/', 'v1.0', 'user:pass')->getFullUrl('testuri'));
        $this->assertSame('https://user:pass@domain.tld:1234/base/path/test/v1.0/testuri', $this->getGetRequestBuilder('https', 'domain.tld', 1234, '/base/path/test/', 'v1.0', 'user:pass')->getFullUrl('testuri'));
        $this->assertSame('https://user:pass@domain.tld:1234/v1.0/testuri', $this->getGetRequestBuilder('https', 'domain.tld', 1234, null, 'v1.0', 'user:pass')->getFullUrl('testuri'));
        $this->assertSame('https://user:pass@domain.tld:1234/v1.0/testuri', $this->getGetRequestBuilder('https', 'domain.tld', 1234, '/', 'v1.0', 'user:pass')->getFullUrl('testuri'));
        $this->assertSame('https://domain.tld/v1.0/testuri', $this->getGetRequestBuilder('https', 'domain.tld', 443, '/', 'v1.0', null)->getFullUrl('testuri'));
    }

    /**
     * @group RequestBuilder
     */
    public function testCreateIORequestObjectReturnsIORequestObjectCorrectlyInitialized()
    {
        $requestBuilder = $this->getGetRequestBuilder('https', 'domain.tld', 443, '/', 'v1.0', null);
        $IORequest = $requestBuilder->createIORequestObject(Method::GET, 'https://someurl.com/v1.0/test');
        $this->assertInstanceOf(IORequest::class, $IORequest);
        $this->assertSame(Method::GET, $IORequest->getMethod());
        $this->assertSame('https://someurl.com/v1.0/test', $IORequest->getUrl());
    }

    public function testGetSignedRequestReturnsAnIORequestWithTheSignatureGeneratedByTheRequestSigner()
    {
        $modelRequest = $this->mock(ModelRequestGetApiCheck::class)->new();
        $requestBuilder = $this->getGetRequestBuilder('https', 'domain.tld', 443, '/', 'v1.0', null);
        $IORequest = $requestBuilder->getSignedRequest($modelRequest);
        $this->assertSame(
            [
                'X-Signed-Request' => '1234567890abcdef',
                'X-Validation-Data' => 'test'
            ],
            $IORequest->getHeaders()
        );
    }

    /**
     * @group RequestBuilder
     */
    public function testFilterNullParams()
    {
        $requestBuilder = $this->getGetRequestBuilder('https', 'domain.tld', 443, '/', 'v1.0', null);
        $output = $requestBuilder->filterNullParams([
            'data1' =>  'abcd',
            'data2' =>  false,
            'data3' =>  null,
            'data4' =>  0,
            'data5' =>  ''
        ]);

        $this->assertSame(
            [
                'data1' =>  'abcd',
                'data2' =>  false,
                'data4' =>  0,
                'data5' =>  ''
            ],
            $output
        );
    }

    /**
     * @param string $scheme
     * @param string $domain
     * @param integer $port
     * @param string $basePath
     * @param string $apiVersion
     * @param string $userInfo
     * @return NullGetRequestBuilder
     */
    private function getGetRequestBuilder($scheme, $domain, $port, $basePath, $apiVersion, $userInfo)
    {
        /** @var RequestDirectorFactory $requestDirectorFactory */
        $requestDirectorFactory = $this->prophesize(RequestDirectorFactory::class)->reveal();

        $IORequest = $this->mock(IORequest::class)->getHeaders(['X-Signed-Request' => '1234567890abcdef', 'X-Validation-Data' => 'test'])->new();

        return new NullGetRequestBuilder(
            $this->getSettingMock($scheme, $domain, $port, $basePath, $apiVersion, $userInfo),
            $this->mock(DiskFileReader::class)->new(),
            $this->mock(OpenSslRequestSigner::class)->sign($IORequest)->new(),
            $requestDirectorFactory
        );
    }

    /**
     * @param string $scheme
     * @param string $domain
     * @param integer $port
     * @param string $basePath
     * @param string $apiVersion
     * @param string $userInfo
     * @return ApiClientSetting
     */
    private function getSettingMock($scheme, $domain, $port, $basePath, $apiVersion, $userInfo)
    {
        return $this->mock(ApiClientSetting::class)
            ->getScheme($scheme)
            ->getDomain($domain)
            ->getPort($port)
            ->getBasePath($basePath)
            ->getApiVersion($apiVersion)
            ->getUserInfo($userInfo)
            ->new()
        ;
    }
}