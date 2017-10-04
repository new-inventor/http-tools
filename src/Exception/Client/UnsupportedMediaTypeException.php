<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class UnsupportedMediaTypeException extends HttpException
{
    protected $statusCode = ClientError::UNSUPPORTED_MEDIA_TYPE;
    protected $statusCodeString = 'UNSUPPORTED_MEDIA_TYPE';
}