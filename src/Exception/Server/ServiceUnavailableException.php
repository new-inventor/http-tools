<?php

namespace NewInventor\HttpTools\Exception\Server;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ServerError;

class ServiceUnavailableException extends HttpException
{
    protected $statusCode = ServerError::SERVICE_UNAVAILABLE;
    protected $statusCodeString = 'SERVICE_UNAVAILABLE';
}