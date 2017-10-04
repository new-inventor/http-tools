<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class BadRequestException extends HttpException
{
    protected $statusCode = ClientError::BAD_REQUEST;
    protected $statusCodeString = 'BAD_REQUEST';
}