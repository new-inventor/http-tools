<?php

namespace NewInventor\HttpTools\Exception\Server;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ServerError;

class BandwidthLimitExceededException extends HttpException
{
    protected $statusCode = ServerError::BANDWIDTH_LIMIT_EXCEEDED;
    protected $statusCodeString = 'BANDWIDTH_LIMIT_EXCEEDED';
}