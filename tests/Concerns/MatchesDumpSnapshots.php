<?php

namespace CheckybotLabs\\FlareClient\\Tests\Concerns;

use CheckybotLabs\\FlareClient\\Tests\TestClasses\DumpDriver;
use function Spatie\Snapshots\assertMatchesSnapshot;

trait MatchesDumpSnapshots
{
    public function assertMatchesDumpSnapshot(array $codeSnippet)
    {
        assertMatchesSnapshot($codeSnippet, new DumpDriver());
    }
}
