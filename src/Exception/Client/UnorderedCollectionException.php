<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class UnorderedCollectionException extends HttpException
{
    protected $statusCode = ClientError::UNORDERED_COLLECTION;
    protected $statusCodeString = 'UNORDERED_COLLECTION';
}