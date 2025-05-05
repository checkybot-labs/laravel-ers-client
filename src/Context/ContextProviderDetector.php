<?php

namespace Emefye\LaravelErsClient\Context;

interface ContextProviderDetector
{
    public function detectCurrentContext(): ContextProvider;
}
