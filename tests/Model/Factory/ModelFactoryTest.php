<?php

namespace Anytime\ApiClient\Model\Factory;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\DateTime\TimezoneNormalizer\TimezoneNormalizer;
use Anytime\ApiClient\Model\Populator\ModelResponsePopulator;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetApiCheck;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\ModelRequestFactory;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetApiCheck;
use Anytime\ApiClient\Model\Response\ModelResponseFactory;
use Xpmock\TestCase;

class ModelFactoryTest extends TestCase
{
    /**
     * @group Model
     * @group ModelFactory
     * @group ModelResponseFactory
     */
    public function testCreateByModelTypeResponseReturnsCorrectObjectIfModelExists()
    {
        $modelRequest = new ModelRequestGetApiCheck(new TimezoneNormalizer());
        $modelFactory = new ModelResponseFactory(new ModelResponsePopulator());
        $this->assertInstanceOf(ModelResponseGetApiCheck::class, $modelFactory->create($modelRequest));
    }

    /**
     * @group Model
     * @group ModelFactory
     * @group ModelResponseFactory
     */
    public function testCreateByModelTypeResponseThrowsExceptionIfModelDoesNotExists()
    {
        $this->expectException(\RuntimeException::class);
        $modelFactory = new ModelResponseFactory(new ModelResponsePopulator());

        $fakeModelRequest = new ModelRequestFake(new TimezoneNormalizer());
        $modelFactory->create($fakeModelRequest);
    }

    /**
     * @group Model
     * @group ModelFactory
     * @group ModelRequestFactory
     */
    public function testCreateByModelTypeRequestReturnsCorrectObjectIfModelExists()
    {
        $modelFactory = new ModelRequestFactory();
        $this->assertInstanceOf(ModelRequestGetApiCheck::class, $modelFactory->create(Method::GET, API::APICHECK));
    }

    /**
     * @group Model
     * @group ModelFactory
     * @group ModelRequestFactory
     */
    public function testCreateByModelTypeRequestThrowsExceptionIfModelDoesNotExists()
    {
        $this->expectException(\RuntimeException::class);
        $modelFactory = new ModelRequestFactory();
        $modelFactory->create(Method::GET, 'UnexistingModelAPI');
    }
}

class ModelRequestFake extends ModelRequest
{
    public function getMethod()
    {
        return Method::GET;
    }

    public function getApiName()
    {
        return 'UnexistingModelAPI';
    }
}
