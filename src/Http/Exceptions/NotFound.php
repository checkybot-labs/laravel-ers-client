<?php

namespace Emefye\LaravelErsClient\Http\Exceptions;

use Emefye\LaravelErsClient\Http\Response;

class NotFound extends BadResponseCode
{
    public static function getMessageForResponse(Response $response): string
    {
        return 'Not found';
    }
}
