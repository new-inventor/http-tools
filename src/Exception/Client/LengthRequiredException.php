<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class LengthRequiredException extends HttpException
{
    protected $statusCode = ClientError::LENGTH_REQUIRED;
    protected $statusCodeString = 'LENGTH_REQUIRED';
}