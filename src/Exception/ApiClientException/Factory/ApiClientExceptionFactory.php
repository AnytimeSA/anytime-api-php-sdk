<?php

namespace Anytime\ApiClient\Exception\ApiClientException\Factory;

use Anytime\ApiClient\Exception\ApiClientException\ApiClientException;
use Anytime\ApiClient\Exception\ApiClientException\UnhandledException;
use GuzzleHttp\Exception\BadResponseException;

class ApiClientExceptionFactory
{
    /**
     * @param BadResponseException $badResponseException
     * @return ApiClientException
     * @TODO refactor
     */
    public function create(BadResponseException $badResponseException)
    {
        $contents = $badResponseException->getResponse()->getBody()->getContents();
        $contentsArray = json_decode($contents, true);

        if(is_array($contentsArray) && array_key_exists('body', $contentsArray)) {
            if(array_key_exists('error', $contentsArray['body'])) {
                $error = $contentsArray['body']['error'];

                $code = (array_key_exists('code', $error) ? $error['code'] : 0);
                $message = (array_key_exists('message', $error) ? $error['message'] : 0);
                $apiExceptionString = (array_key_exists('exception', $error) ? $error['exception'] : 0);

                $exceptionClass = 'Anytime\\ApiClient\\Exception\\ApiClientException\\' . $apiExceptionString;

                if(class_exists($exceptionClass)) {
                    $exception = new $exceptionClass($message, $code, $badResponseException);
                }
            }
        }

        if(!isset($exception)) {
            $exception = new UnhandledException('The exception returned by the API is not handled by this client', 0, $badResponseException);
        }

        $exception->setResponseContent($contents);

        return $exception;
    }
}