<?php

namespace NewInventor\HttpTools\Exception\Server;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ServerError;

class InsufficientStorageException extends HttpException
{
    protected $statusCode = ServerError::INSUFFICIENT_STORAGE;
    protected $statusCodeString = 'INSUFFICIENT_STORAGE';
}