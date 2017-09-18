<?php
/**
 * Project: TP messaging service
 * User: george
 * Date: 08.08.17
 */

namespace NewInventor\HttpTools\Header;


class ResponseHeaders
{
    const ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin';
    const ACCESS_CONTROL_ALLOW_CREDENTIALS = 'Access-Control-Allow-Credentials';
    const ACCESS_CONTROL_EXPOSE_HEADERS = 'Access-Control-Expose-Headers';
    const ACCESS_CONTROL_MAX_AGE = 'Access-Control-Max-Age';
    const ACCESS_CONTROL_ALLOW_METHODS = 'Access-Control-Allow-Methods';
    const ACCESS_CONTROL_ALLOW_HEADERS = 'Access-Control-Allow-Headers';
    const ACCEPT_PATCH = 'Accept-Patch';
    const ACCEPT_RANGES = 'Accept-Ranges';
    const AGE = 'Age';
    const ALLOW = 'Allow';
    const ALT_SVC = 'Alt-Svc';
    const CACHE_CONTROL = 'Cache-Control';
    const CONNECTION = 'Connection';
    const CONTENT_DISPOSITION = 'Content-Disposition';
    const CONTENT_ENCODING = 'Content-Encoding';
    const CONTENT_LANGUAGE = 'Content-Language';
    const CONTENT_LENGTH = 'Content-Length';
    const CONTENT_LOCATION = 'Content-Location';
    const CONTENT_MD5 = 'Content-MD5';
    const CONTENT_RANGE = 'Content-Range';
    const CONTENT_TYPE = 'Content-Type';
    const DATE = 'Date';
    const E_TAG = 'ETag';
    const EXPIRES = 'Expires';
    const LAST_MODIFIED = 'Last-Modified';
    const LINK = 'Link';
    const LOCATION = 'Location';
    const P3P = 'P3P';
    const PRAGMA = 'Pragma';
    const PROXY_AUTHENTICATE = 'Proxy-Authenticate';
    const PUBLIC_KEY_PINS = 'Public-Key-Pins';
    const RETRY_AFTER = 'Retry-After';
    const SERVER = 'Server';
    const SET_COOKIE = 'Set-Cookie';
    const STRICT_TRANSPORT_SECURITY = 'Strict-Transport-Security';
    const TRAILER = 'Trailer';
    const TRANSFER_ENCODING = 'Transfer-Encoding';
    const TK = 'Tk';
    const UPGRADE = 'Upgrade';
    const VARY = 'Vary';
    const VIA = 'Via';
    const WARNING = 'Warning';
    const WWW_AUTHENTICATE = 'WWW-Authenticate';
    const CONTENT_SECURITY_POLICY = 'Content-Security-Policy';
    const REFRESH = 'Refresh';
    const STATUS = 'Status';
    const UPGRADE_INSECURE_REQUESTS = 'Upgrade-Insecure-Requests';
}