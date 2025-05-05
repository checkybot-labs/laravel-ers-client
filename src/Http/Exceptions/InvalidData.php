<?php

namespace Emefye\LaravelErsClient\Http\Exceptions;

use Emefye\LaravelErsClient\Http\Response;

class InvalidData extends BadResponseCode
{
    public static function getMessageForResponse(Response $response): string
    {
        return 'Invalid data found';
    }
}
