<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class UnprocessableEntityException extends HttpException
{
    protected $statusCode = ClientError::UNPROCESSABLE_ENTITY;
    protected $statusCodeString = 'UNPROCESSABLE_ENTITY';
}