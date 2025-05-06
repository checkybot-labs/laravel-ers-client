<?php

namespace CheckybotLabs\LaravelErsClient\FlareMiddleware;

use Closure;
use CheckybotLabs\LaravelErsClient\Report;

interface FlareMiddleware
{
    public function handle(Report $report, Closure $next);
}
