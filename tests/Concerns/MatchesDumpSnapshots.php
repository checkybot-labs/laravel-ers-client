<?php

namespace CheckybotLabs\LaravelErsClient\Tests\Concerns;

use CheckybotLabs\LaravelErsClient\Tests\TestClasses\DumpDriver;
use function Spatie\Snapshots\assertMatchesSnapshot;

trait MatchesDumpSnapshots
{
    public function assertMatchesDumpSnapshot(array $codeSnippet)
    {
        assertMatchesSnapshot($codeSnippet, new DumpDriver());
    }
}
