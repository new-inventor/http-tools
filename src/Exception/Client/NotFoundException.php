<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class NotFoundException extends HttpException
{
    protected $statusCode = ClientError::NOT_FOUND;
    protected $statusCodeString = 'NOT_FOUND';
}