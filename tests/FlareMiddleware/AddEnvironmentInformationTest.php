<?php

use CheckybotLabs\LaravelErsClient\Context\ConsoleContextProvider;
use CheckybotLabs\LaravelErsClient\FlareMiddleware\AddEnvironmentInformation;
use CheckybotLabs\LaravelErsClient\Report;

it('adds the php version to a report', function () {
    $middleware = new AddEnvironmentInformation();

    $report = (new Report())->useContext(new ConsoleContextProvider());

    $middleware->handle($report, fn (Report $report) => $report);

    expect($report->allContext())->toHaveKey('env', ['php_version' => phpversion()]);
});
