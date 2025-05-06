<?php

namespace CheckybotLabs\LaravelErsClient\Context;

interface ContextProvider
{
    /**
     * @return array<int, string|mixed>
     */
    public function toArray(): array;
}
