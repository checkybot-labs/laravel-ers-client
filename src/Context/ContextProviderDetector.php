<?php

namespace CheckybotLabs\LaravelErsClient\Context;

interface ContextProviderDetector
{
    public function detectCurrentContext(): ContextProvider;
}
