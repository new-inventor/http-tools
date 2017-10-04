<?php

namespace NewInventor\HttpTools\Exception\Server;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ServerError;

class HttpVersionNotSupportedException extends HttpException
{
    protected $statusCode = ServerError::HTTP_VERSION_NOT_SUPPORTED;
    protected $statusCodeString = 'HTTP_VERSION_NOT_SUPPORTED';
}