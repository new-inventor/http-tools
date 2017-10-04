<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class ProxyAuthenticationRequiredException extends HttpException
{
    protected $statusCode = ClientError::PROXY_AUTHENTICATION_REQUIRED;
    protected $statusCodeString = 'PROXY_AUTHENTICATION_REQUIRED';
}