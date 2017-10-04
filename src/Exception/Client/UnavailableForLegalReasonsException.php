<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class UnavailableForLegalReasonsException extends HttpException
{
    protected $statusCode = ClientError::UNAVAILABLE_FOR_LEGAL_REASONS;
    protected $statusCodeString = 'UNAVAILABLE_FOR_LEGAL_REASONS';
}