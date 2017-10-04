<?php

namespace NewInventor\HttpTools\Exception;


class HttpException extends \RuntimeException implements HttpExceptionInterface
{
    protected $statusCode = 0;
    protected $statusCodeString = 'UNKNOWN';
    protected $headers = [];
    
    /**
     * HttpException constructor.
     *
     * @param string          $message
     * @param \Exception|null $previous
     * @param array           $headers
     */
    public function __construct($message, \Exception $previous = null, array $headers = [])
    {
        $this->headers = $headers;
        
        parent::__construct($message, 0, $previous);
    }
    
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    
    public function getStatusCodeString()
    {
        return $this->statusCodeString;
    }
    
    public function getHeaders()
    {
        return $this->headers;
    }
    
    /**
     * Set response headers.
     *
     * @param array $headers Response headers
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }
}