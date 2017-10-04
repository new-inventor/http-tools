<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class RequestedRangeNotSatisfiableException extends HttpException
{
    protected $statusCode = ClientError::REQUESTED_RANGE_NOT_SATISFIABLE;
    protected $statusCodeString = 'REQUESTED_RANGE_NOT_SATISFIABLE';
}