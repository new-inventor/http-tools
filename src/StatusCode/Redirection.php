<?php
/**
 * Project: TP messaging service
 * User: george
 * Date: 08.08.17
 */

namespace TPMailSender\HttpTools\StatusCode;


class Redirection
{
    const MULTIPLE_CHOICES = 300;
    const MOVED_PERMANENTLY = 301;
    const MOVED_TEMPORARILY = 302;
    const FOUND = 302;
    const SEE_OTHER = 303;
    const NOT_MODIFIED = 304;
    const USE_PROXY = 305;
    const _RESERVED = 306;
    const TEMPORARY_REDIRECT = 307;
}