<?php

namespace CheckybotLabs\\FlareClient\\Tests\Concerns;

use CheckybotLabs\\FlareClient\\Tests\TestClasses\ReportDriver;
use function Spatie\Snapshots\assertMatchesSnapshot;

trait MatchesReportSnapshots
{
    public function assertMatchesReportSnapshot(array $report)
    {
        assertMatchesSnapshot($report, new ReportDriver());
    }
}
