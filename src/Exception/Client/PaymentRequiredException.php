<?php

namespace NewInventor\HttpTools\Exception\Client;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ClientError;

class PaymentRequiredException extends HttpException
{
    protected $statusCode = ClientError::PAYMENT_REQUIRED;
    protected $statusCodeString = 'PAYMENT_REQUIRED';
}