<?php

use CheckybotLabs\LaravelErsClient\Glows\Glow;
use CheckybotLabs\LaravelErsClient\Report;
use CheckybotLabs\LaravelErsClient\Tests\TestClasses\FakeTime;

uses()->beforeEach(function () {
    Report::$fakeTrackingUuid = 'fake-uuid';
})->in(__DIR__);

function makePathsRelative(string $text): string
{
    return str_replace(dirname(__DIR__, 1), '', $text);
}

function useTime(string $dateTime, string $format = 'Y-m-d H:i:s')
{
    $fakeTime = new FakeTime($dateTime, $format);

    Report::useTime($fakeTime);
    Glow::useTime($fakeTime);
}

function getStubPath(string $stubName): string
{
    return __DIR__."/stubs/{$stubName}";
}
