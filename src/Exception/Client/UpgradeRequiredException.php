<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class UpgradeRequiredException extends HttpException
{
    protected $statusCode = ClientError::UPGRADE_REQUIRED;
    protected $statusCodeString = 'UPGRADE_REQUIRED';
}