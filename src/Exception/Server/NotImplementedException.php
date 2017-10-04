<?php

namespace NewInventor\HttpTools\Exception\Server;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ServerError;

class NotImplementedException extends HttpException
{
    protected $statusCode = ServerError::NOT_IMPLEMENTED;
    protected $statusCodeString = 'NOT_IMPLEMENTED';
}