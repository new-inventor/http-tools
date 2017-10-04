<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class RequestUriTooLargeException extends HttpException
{
    protected $statusCode = ClientError::REQUEST_URI_TOO_LARGE;
    protected $statusCodeString = 'REQUEST_URI_TOO_LARGE';
}