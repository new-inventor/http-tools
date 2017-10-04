<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class NotAcceptableException extends HttpException
{
    protected $statusCode = ClientError::NOT_ACCEPTABLE;
    protected $statusCodeString = 'NOT_ACCEPTABLE';
}