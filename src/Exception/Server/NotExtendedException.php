<?php

namespace NewInventor\HttpTools\Exception\Server;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ServerError;

class NotExtendedException extends HttpException
{
    protected $statusCode = ServerError::NOT_EXTENDED;
    protected $statusCodeString = 'NOT_EXTENDED';
}