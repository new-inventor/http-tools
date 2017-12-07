# Http tools
This library provides exceptions, status codes, and common headers for http requests and responses.

All exceptions
* extend `NewInventor\HttpTools\Exception\HttpException`
* implement `NewInventor\HttpTools\Exception\HttpExceptionInterface`

The basic kind of HttpException is \RuntimeException.

All http exceptions have numeric code and symbolic code like 404 and 'NOT_FOUND'.

There are two types of the exceptions "Client" (4xx) and "Server" (5xx).

You can raise the exception with this code:
```php
throw new NewInventor\HttpTools\Exception\Client\ForbiddenException('Your access rights are invalid.');
```

To get the status code:
```php
$exception->getStatusCode();
$exception->getStatusCodeString();
```

You can use the StatusCode enumerations, for check the codes from another libraries. Like so:

```php
if($response->getStatusCode() === NewInventor\HttpTools\StatusCode\ClientError::BAD_REQUEST){ ... }
```  

You can use Header enumerations for paste headers in configuration.
