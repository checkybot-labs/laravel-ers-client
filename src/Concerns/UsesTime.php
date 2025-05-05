<?php

namespace Emefye\LaravelErsClient\Concerns;

use Emefye\LaravelErsClient\Time\SystemTime;
use Emefye\LaravelErsClient\Time\Time;

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
