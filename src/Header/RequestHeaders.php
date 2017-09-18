<?php
/**
 * Project: TP messaging service
 * User: george
 * Date: 08.08.17
 */

namespace TPMailSender\HttpTools\Header;


class RequestHeaders
{
    const ACCEPT = 'Accept';
    const ACCEPT_CHARSET = 'Accept-Charset';
    const ACCEPT_ENCODING = 'Accept-Encoding';
    const ACCEPT_LANGUAGE = 'Accept-Language';
    const ACCEPT_DATETIME = 'Accept-Datetime';
    const ACCESS_CONTROL_REQUEST_METHOD = 'Access-Control-Request-Method';
    const ACCESS_CONTROL_REQUEST_HEADERS = 'Access-Control-Request-Headers';
    const AUTHORIZATION = 'Authorization';
    const CACHE_CONTROL = 'Cache-Control';
    const CONNECTION = 'Connection';
    const COOKIE = 'Cookie';
    const CONTENT_LENGTH = 'Content-Length';
    const CONTENT_MD5 = 'Content-MD5';
    const CONTENT_TYPE = 'Content-Type';
    const DATE = 'Date';
    const EXPECT = 'Expect';
    const FORWARDED = 'Forwarded';
    const FROM = 'From';
    const HOST = 'Host';
    const IF_MATCH = 'If-Match';
    const IF_MODIFIED_SINCE = 'If-Modified-Since';
    const IF_NONE_MATCH = 'If-None-Match';
    const IF_RANGE = 'If-Range';
    const IF_UNMODIFIED_SINCE = 'If-Unmodified-Since';
    const MAX_FORWARDS = 'Max-Forwards';
    const ORIGIN = 'Origin';
    const PRAGMA = 'Pragma';
    const PROXY_AUTHORIZATION = 'Proxy-Authorization';
    const RANGE = 'Range';
    const REFERER = 'Referer';
    const TE = 'TE';
    const USER_AGENT = 'User-Agent';
    const UPGRADE = 'Upgrade';
    const VIA = 'Via';
    const WARNING = 'Warning';
    const DNT = 'DNT';
    const CUSTOM = 'X-*';
}