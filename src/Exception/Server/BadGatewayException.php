<?php

namespace NewInventor\HttpTools\Exception\Server;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ServerError;

class BadGatewayException extends HttpException
{
    protected $statusCode = ServerError::BAD_GATEWAY;
    protected $statusCodeString = 'BAD_GATEWAY';
}