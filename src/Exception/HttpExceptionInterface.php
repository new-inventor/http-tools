<?php

namespace NewInventor\HttpTools\Exception;


interface HttpExceptionInterface
{
    /**
     * Returns the status numeric code.
     * @return int An HTTP response status code
     */
    public function getStatusCode();
    
    /**
     * Returns the status string code.
     * @return string An HTTP response status code
     */
    public function getStatusCodeString();
    
    /**
     * Returns response headers.
     * @return array Response headers
     */
    public function getHeaders();
}