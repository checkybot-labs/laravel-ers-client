<?php

namespace CheckybotLabs\LaravelErsClient\FlareMiddleware;

use Closure;
use CheckybotLabs\LaravelErsClient\Report;

class AddEnvironmentInformation implements FlareMiddleware
{
    public function handle(Report $report, Closure $next)
    {
        $report->group('env', [
            'php_version' => phpversion(),
        ]);

        return $next($report);
    }
}
