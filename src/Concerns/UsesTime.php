<?php

namespace CheckybotLabs\LaravelErsClient\Concerns;

use CheckybotLabs\LaravelErsClient\Time\SystemTime;
use CheckybotLabs\LaravelErsClient\Time\Time;

trait UsesTime
{
    public static Time $time;

    public static function useTime(Time $time): void
    {
        self::$time = $time;
    }

    public function getCurrentTime(): int
    {
        $time = self::$time ?? new SystemTime();

        return $time->getCurrentTime();
    }
}
