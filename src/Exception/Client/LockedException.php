<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class LockedException extends HttpException
{
    protected $statusCode = ClientError::LOCKED;
    protected $statusCodeString = 'LOCKED';
}