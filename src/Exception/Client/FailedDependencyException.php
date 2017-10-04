<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class FailedDependencyException extends HttpException
{
    protected $statusCode = ClientError::FAILED_DEPENDENCY;
    protected $statusCodeString = 'FAILED_DEPENDENCY';
}