<?php

namespace NewInventor\HttpTools\Exception\Server;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ServerError;

class GatewayTimeoutException extends HttpException
{
    protected $statusCode = ServerError::GATEWAY_TIMEOUT;
    protected $statusCodeString = 'GATEWAY_TIMEOUT';
}