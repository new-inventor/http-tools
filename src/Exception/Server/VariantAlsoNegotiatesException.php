<?php

namespace NewInventor\HttpTools\Exception\Server;


use NewInventor\HttpTools\Exception\HttpException;
use NewInventor\HttpTools\StatusCode\ServerError;

class VariantAlsoNegotiatesException extends HttpException
{
    protected $statusCode = ServerError::VARIANT_ALSO_NEGOTIATES;
    protected $statusCodeString = 'VARIANT_ALSO_NEGOTIATES';
}