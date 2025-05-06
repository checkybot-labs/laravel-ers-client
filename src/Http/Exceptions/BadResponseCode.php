<?php

namespace CheckybotLabs\LaravelErsClient\Http\Exceptions;

use CheckybotLabs\LaravelErsClient\Http\Response;
use Exception;

class BadResponseCode extends Exception
{
    public Response $response;

    /**
     * @var array<int, mixed>
     */
    public array $errors = [];

    public static function createForResponse(Response $response): self
    {
        $exception = new self(static::getMessageForResponse($response));

        $exception->response = $response;

        $bodyErrors = isset($response->getBody()['errors']) ? $response->getBody()['errors'] : [];

        $exception->errors = $bodyErrors;

        return $exception;
    }

    public static function getMessageForResponse(Response $response): string
    {
        return "Response code {$response->getHttpResponseCode()} returned";
    }
}
