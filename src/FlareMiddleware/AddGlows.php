<?php

namespace Emefye\LaravelErsClient\FlareMiddleware;

namespace Emefye\LaravelErsClient\FlareMiddleware;

use Closure;
use Emefye\LaravelErsClient\Glows\GlowRecorder;
use Emefye\LaravelErsClient\Report;

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
