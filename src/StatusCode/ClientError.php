<?php
/**
 * Project: TP messaging service
 * User: george
 * Date: 25.07.17
 */

namespace NewInventor\HttpTools\StatusCode;


class ClientError
{
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const PAYMENT_REQUIRED = 402;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const NOT_ACCEPTABLE = 406;
    const PROXY_AUTHENTICATION_REQUIRED = 407;
    const REQUEST_TIMEOUT = 408;
    const CONFLICT = 409;
    const GONE = 410;
    const LENGTH_REQUIRED = 411;
    const PRECONDITION_FAILED = 412;
    const REQUEST_ENTITY_TOO_LARGE = 413;
    const REQUEST_URI_TOO_LARGE = 414;
    const UNSUPPORTED_MEDIA_TYPE = 415;
    const REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    const EXPECTATION_FAILED = 417;
    const UNPROCESSABLE_ENTITY = 422;
    const LOCKED = 423;
    const FAILED_DEPENDENCY = 424;
    const UNORDERED_COLLECTION = 425;
    const UPGRADE_REQUIRED = 426;
    const PRECONDITION_REQUIRED = 428;
    const TOO_MANY_REQUESTS = 429;
    const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    const RETRY_WITH = 449;
    const UNAVAILABLE_FOR_LEGAL_REASONS = 451;
}