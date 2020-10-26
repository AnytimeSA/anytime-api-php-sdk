<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\ApiClientSetting;
use Anytime\ApiClient\Authenticator\ResponseAuthenticator;
use Anytime\ApiClient\Builder\RequestBuilder\RequestDirectorFactory;
use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Exception\ApiClientException\Factory\ApiClientExceptionFactory;
use Anytime\ApiClient\Model\Populator\ModelResponsePopulator;
use Anytime\ApiClient\Model\Request\ModelRequestFactory;
use Anytime\ApiClient\Model\Response\ModelResponseFactory;
use Anytime\ApiClient\Parser\ResponseParser\BinaryResponseParser;
use Anytime\ApiClient\Parser\ResponseParser\JsonResponseParser;
use GuzzleHttp\Client;
use Xpmock\TestCase;

class IOFactoryTest extends TestCase
{
    /**
     * @group IO
     * @group IOFactory
     */
    public function testCreateReturnsCorrectObjectWhenClassExists()
    {
        $IOFactory = $this->getIOFactory();
        $this->assertInstanceOf(ApiCheckIO::class, $IOFactory->create(API::APICHECK));
    }

    /**
     * @group IO
     * @group IOFactory
     */
    public function testCreateThrowsExceptionIfClassDoesNotExists()
    {
        $this->expectException(\RuntimeException::class);
        $IOFactory = $this->getIOFactory();
        $IOFactory->create('UnexistingIOApiName');
    }

    /**
     * @return IOFactory
     */
    private function getIOFactory()
    {
        return new IOFactory(
            $this->mock(Client::class)->new(),
            $this->mock(ApiClientSetting::class)->new(),
            $this->mock(ModelRequestFactory::class)->new(),
            $this->mock(ModelResponseFactory::class)->new(),
            $this->mock(RequestDirectorFactory::class)->new(),
            $this->mock(ApiClientExceptionFactory::class)->new(),
            $this->mock(ModelResponsePopulator::class)->new(),
            $this->mock(JsonResponseParser::class)->new(),
            $this->mock(BinaryResponseParser::class)->new(),
            $this->mock(ResponseAuthenticator::class)->new()
        );
    }
}
