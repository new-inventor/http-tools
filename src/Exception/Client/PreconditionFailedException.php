<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class PreconditionFailedException extends HttpException
{
    protected $statusCode = ClientError::PRECONDITION_FAILED;
    protected $statusCodeString = 'PRECONDITION_FAILED';
}