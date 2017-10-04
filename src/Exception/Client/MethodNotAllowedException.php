<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class MethodNotAllowedException extends HttpException
{
    protected $statusCode = ClientError::METHOD_NOT_ALLOWED;
    protected $statusCodeString = 'METHOD_NOT_ALLOWED';
}