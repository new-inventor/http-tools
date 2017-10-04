<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class UnauthorizedException extends HttpException
{
    protected $statusCode = ClientError::UNAUTHORIZED;
    protected $statusCodeString = 'BAD_REQUEST';
}