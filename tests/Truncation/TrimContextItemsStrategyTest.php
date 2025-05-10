<?php

use Illuminate\Support\Str;

use CheckybotLabs\LaravelErsClient\Truncation\ReportTrimmer;
use CheckybotLabs\LaravelErsClient\Truncation\TrimContextItemsStrategy;

beforeEach(function () {
    ReportTrimmer::setMaxPayloadSize(52428);
});

it('can trim long context items in payload', function () {
    foreach (TrimContextItemsStrategy::thresholds() as $threshold) {
        [$payload, $expected] = createLargePayloadWithContext($threshold);

        $strategy = new TrimContextItemsStrategy(new ReportTrimmer());
        expect($strategy->execute($payload))->toBe($expected);
    }
});

it('does not trim short context item payloads', function () {
    $payload = [
        'context' => [
            'queries' => [
                1, 2, 3, 4,
            ],
        ],
    ];

    $strategy = new TrimContextItemsStrategy(new ReportTrimmer());

    $trimmedPayload = $strategy->execute($payload);

    expect($trimmedPayload)->toBe($payload);
});

// Helpers
function createLargePayloadWithContext($threshold)
{
    $payload = $expected = [
        'context' => [
            'queries' => [],
        ],
    ];

    $contextKeys = [];

    while (strlen(json_encode($payload)) < ReportTrimmer::getMaxPayloadSize()) {
        $payloadItems = range(0, $threshold + 10);

        $contextKeys[] = $contextKey = Str::random();

        $payload['context'][$contextKey][] = $payloadItems;
        $expected['context'][$contextKey][] = array_slice($payloadItems, $threshold * -1, $threshold);
    }

    foreach ($contextKeys as $contextKey) {
        $expected['context'][$contextKey] = array_slice($expected['context'][$contextKey], $threshold * -1, $threshold);
    }

    return [$payload, $expected];
}
