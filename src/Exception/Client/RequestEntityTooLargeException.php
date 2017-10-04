<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class RequestEntityTooLargeException extends HttpException
{
    protected $statusCode = ClientError::REQUEST_ENTITY_TOO_LARGE;
    protected $statusCodeString = 'REQUEST_ENTITY_TOO_LARGE';
}