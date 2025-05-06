<?php

namespace CheckybotLabs\LaravelErsClient\Http\Exceptions;

use CheckybotLabs\LaravelErsClient\Http\Response;

class InvalidData extends BadResponseCode
{
    public static function getMessageForResponse(Response $response): string
    {
        return 'Invalid data found';
    }
}
