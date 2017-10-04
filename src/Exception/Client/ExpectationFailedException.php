<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class ExpectationFailedException extends HttpException
{
    protected $statusCode = ClientError::EXPECTATION_FAILED;
    protected $statusCodeString = 'EXPECTATION_FAILED';
}