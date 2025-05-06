<?php

namespace CheckybotLabs\LaravelErsClient\Http\Exceptions;

use CheckybotLabs\LaravelErsClient\Http\Response;

class NotFound extends BadResponseCode
{
    public static function getMessageForResponse(Response $response): string
    {
        return 'Not found';
    }
}
