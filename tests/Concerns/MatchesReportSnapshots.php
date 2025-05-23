<?php

namespace CheckybotLabs\LaravelErsClient\Tests\Concerns;

use CheckybotLabs\LaravelErsClient\Tests\TestClasses\ReportDriver;
use function Spatie\Snapshots\assertMatchesSnapshot;

trait MatchesReportSnapshots
{
    public function assertMatchesReportSnapshot(array $report)
    {
        assertMatchesSnapshot($report, new ReportDriver());
    }
}
