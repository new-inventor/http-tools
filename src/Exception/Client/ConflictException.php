<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class ConflictException extends HttpException
{
    protected $statusCode = ClientError::CONFLICT;
    protected $statusCodeString = 'CONFLICT';
}