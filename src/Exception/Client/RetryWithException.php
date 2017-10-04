<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class RetryWithException extends HttpException
{
    protected $statusCode = ClientError::RETRY_WITH;
    protected $statusCodeString = 'RETRY_WITH';
}