<?php

namespace NewInventor\HttpTools\Exception\Server;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ServerError;

class LoopDetectedException extends HttpException
{
    protected $statusCode = ServerError::LOOP_DETECTED;
    protected $statusCodeString = 'LOOP_DETECTED';
}