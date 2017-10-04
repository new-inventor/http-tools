<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class RequestTimeoutException extends HttpException
{
    protected $statusCode = ClientError::REQUEST_TIMEOUT;
    protected $statusCodeString = 'REQUEST_TIMEOUT';
}