<?php

namespace Anytime\ApiClient\Model\Factory;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetApiCheck;
use Anytime\ApiClient\Model\Request\ModelRequestFactory;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetApiCheck;
use Anytime\ApiClient\Model\Response\ModelResponseFactory;
use Xpmock\TestCase;

class ModelFactoryTest extends TestCase
{
    /**
     * @Model
     * @ModelFactory
     * @ModelResponseFactory
     */
    public function testCreateByModelTypeResponseReturnsCorrectObjectIfModelExists()
    {
        $modelFactory = new ModelResponseFactory();
        $this->assertInstanceOf(ModelResponseGetApiCheck::class, $modelFactory->create(Method::GET, API::APICHECK));
    }

    /**
     * @Model
     * @ModelFactory
     * @ModelResponseFactory
     */
    public function testCreateByModelTypeResponseThrowsExceptionIfModelDoesNotExists()
    {
        $this->expectException(\RuntimeException::class);
        $modelFactory = new ModelResponseFactory();
        $modelFactory->create(Method::GET, 'UnexistingModelAPI');
    }

    /**
     * @Model
     * @ModelFactory
     * @ModelRequestFactory
     */
    public function testCreateByModelTypeRequestReturnsCorrectObjectIfModelExists()
    {
        $modelFactory = new ModelRequestFactory();
        $this->assertInstanceOf(ModelRequestGetApiCheck::class, $modelFactory->create(Method::GET, API::APICHECK));
    }

    /**
     * @Model
     * @ModelFactory
     * @ModelRequestFactory
     */
    public function testCreateByModelTypeRequestThrowsExceptionIfModelDoesNotExists()
    {
        $this->expectException(\RuntimeException::class);
        $modelFactory = new ModelRequestFactory();
        $modelFactory->create(Method::GET, 'UnexistingModelAPI');
    }
}