<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class RequestHeaderFieldsTooLargeException extends HttpException
{
    protected $statusCode = ClientError::REQUEST_HEADER_FIELDS_TOO_LARGE;
    protected $statusCodeString = 'REQUEST_HEADER_FIELDS_TOO_LARGE';
}