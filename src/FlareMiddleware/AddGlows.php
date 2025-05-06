<?php

namespace CheckybotLabs\LaravelErsClient\FlareMiddleware;

namespace CheckybotLabs\LaravelErsClient\FlareMiddleware;

use Closure;
use CheckybotLabs\LaravelErsClient\Glows\GlowRecorder;
use CheckybotLabs\LaravelErsClient\Report;

class AddGlows implements FlareMiddleware
{
    protected GlowRecorder $recorder;

    public function __construct(GlowRecorder $recorder)
    {
        $this->recorder = $recorder;
    }

    public function handle(Report $report, Closure $next)
    {
        foreach ($this->recorder->glows() as $glow) {
            $report->addGlow($glow);
        }

        return $next($report);
    }
}
