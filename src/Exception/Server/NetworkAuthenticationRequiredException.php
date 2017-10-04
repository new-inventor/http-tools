<?php

namespace NewInventor\HttpTools\Exception\Server;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ServerError;

class NetworkAuthenticationRequiredException extends HttpException
{
    protected $statusCode = ServerError::NETWORK_AUTHENTICATION_REQUIRED;
    protected $statusCodeString = 'NETWORK_AUTHENTICATION_REQUIRED';
}