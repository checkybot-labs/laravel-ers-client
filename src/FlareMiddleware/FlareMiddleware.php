<?php

namespace Emefye\LaravelErsClient\FlareMiddleware;

use Closure;
use Emefye\LaravelErsClient\Report;

interface FlareMiddleware
{
    public function handle(Report $report, Closure $next);
}
