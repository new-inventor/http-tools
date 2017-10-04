<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class GoneException extends HttpException
{
    protected $statusCode = ClientError::GONE;
    protected $statusCodeString = 'GONE';
}