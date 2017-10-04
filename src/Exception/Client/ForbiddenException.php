<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class ForbiddenException extends HttpException
{
    protected $statusCode = ClientError::FORBIDDEN;
    protected $statusCodeString = 'FORBIDDEN';
}