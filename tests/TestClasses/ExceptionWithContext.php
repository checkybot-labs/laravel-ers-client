<?php

namespace CheckybotLabs\LaravelErsClient\Tests\TestClasses;

use CheckybotLabs\LaravelErsClient\Contracts\ProvidesFlareContext;

class ExceptionWithContext extends \Exception implements ProvidesFlareContext
{
    public function context(): array
    {
        return [
            'context' => [
                'another key' => 'another value',
            ],
        ];
    }
}
