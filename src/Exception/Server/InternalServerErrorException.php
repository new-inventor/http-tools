<?php

namespace NewInventor\HttpTools\Exception\Server;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ServerError;

class InternalServerErrorException extends HttpException
{
    protected $statusCode = ServerError::INTERNAL_SERVER_ERROR;
    protected $statusCodeString = 'INTERNAL_SERVER_ERROR';
}