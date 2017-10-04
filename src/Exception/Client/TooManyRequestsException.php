<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class TooManyRequestsException extends HttpException
{
    protected $statusCode = ClientError::TOO_MANY_REQUESTS;
    protected $statusCodeString = 'TOO_MANY_REQUESTS';
}