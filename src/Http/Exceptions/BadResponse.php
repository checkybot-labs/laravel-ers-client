<?php

namespace CheckybotLabs\LaravelErsClient\Http\Exceptions;

use CheckybotLabs\LaravelErsClient\Http\Response;
use Exception;

class BadResponse extends Exception
{
    public Response $response;

    public static function createForResponse(Response $response): self
    {
        $exception = new self("Could not perform request because: {$response->getError()}");

        $exception->response = $response;

        return $exception;
    }
}
