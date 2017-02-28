<?php

namespace Anytime\ApiClient\Exception\ApiClientException\Factory;

use Anytime\ApiClient\Exception\ApiClientException\ApiClientException;
use Anytime\ApiClient\Exception\ApiClientException\UnhandledException;
use Anytime\ApiClient\Model\Populator\ModelResponsePopulatorInterface;
use Anytime\ApiClient\Model\Response\ModelResponseFactory;
use Anytime\ApiClient\Parser\ParserInterface;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ConnectException;

class ApiClientExceptionFactory
{
    /**
     * @var ModelResponsePopulatorInterface
     */
    private $modelResponsePopulator;

    /**
     * @var ModelResponseFactory
     */
    private $modelResponseFactory;

    /**
     * @var ParserInterface
     */
    private $jsonResponseParser;

    /**
     * ApiClientExceptionFactory constructor.
     *
     * @param ModelResponsePopulatorInterface $modelResponsePopulator
     * @param ModelResponseFactory $modelResponseFactory
     * @param ParserInterface $jsonResponseParser
     */
    public function __construct(ModelResponsePopulatorInterface $modelResponsePopulator, ModelResponseFactory $modelResponseFactory, ParserInterface $jsonResponseParser)
    {
        $this->modelResponsePopulator = $modelResponsePopulator;
        $this->modelResponseFactory = $modelResponseFactory;
        $this->jsonResponseParser = $jsonResponseParser;
    }

    /**
     * @param BadResponseException $badResponseException
     * @return ApiClientException
     * @TODO refactor
     */
    public function createResponseException(BadResponseException $badResponseException)
    {
        $contents = $badResponseException->getResponse()->getBody()->getContents();
        $contentsArray = json_decode($contents, true);

        if(is_array($contentsArray) && array_key_exists('body', $contentsArray)) {
            if(array_key_exists('error', $contentsArray['body'])) {
                $error = $contentsArray['body']['error'];

                $code = (array_key_exists('code', $error) ? $error['code'] : 0);
                $message = (array_key_exists('message', $error) ? $error['message'] : 0);
                $apiExceptionString = (array_key_exists('exception', $error) ? $error['exception'] : 0);

                $exceptionClass = 'Anytime\\ApiClient\\Exception\\ApiClientException\\ResponseException\\' . $apiExceptionString;

                if(class_exists($exceptionClass)) {
                    $exception = new $exceptionClass($message, $code, $badResponseException, $this->modelResponseFactory);
                }
            }
        }

        if(!isset($exception)) {
            $exception = new UnhandledException('The exception returned by the API is not handled by this client', 0, $badResponseException);
        }

        $exception->setResponseContent(
            $this->modelResponsePopulator->populate(
                $this->modelResponseFactory->createError(),
                $this->jsonResponseParser->parse($contents)
            )
        );

        return $exception;
    }

    /**
     * @param ConnectException $connectException
     * @return \Anytime\ApiClient\Exception\ApiClientException\ConnectException\ConnectException
     */
    public function createConnectException(ConnectException $connectException)
    {
        $exception = new \Anytime\ApiClient\Exception\ApiClientException\ConnectException\ConnectException(
            $connectException->getMessage(),
            $connectException->getCode(),
            $connectException
        );
        return $exception;
    }
}