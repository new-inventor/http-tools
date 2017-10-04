<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class PreconditionRequiredException extends HttpException
{
    protected $statusCode = ClientError::PRECONDITION_REQUIRED;
    protected $statusCodeString = 'PRECONDITION_REQUIRED';
}