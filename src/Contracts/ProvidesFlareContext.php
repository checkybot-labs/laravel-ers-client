<?php

namespace CheckybotLabs\LaravelErsClient\Contracts;

interface ProvidesFlareContext
{
    /**
     * @return array<int|string, mixed>
     */
    public function context(): array;
}
