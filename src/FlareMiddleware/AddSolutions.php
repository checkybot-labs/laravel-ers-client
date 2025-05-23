<?php

namespace CheckybotLabs\LaravelErsClient\FlareMiddleware;

use Closure;
use CheckybotLabs\LaravelErsClient\Report;
use Spatie\ErrorSolutions\Contracts\SolutionProviderRepository;
use Spatie\Ignition\Contracts\SolutionProviderRepository as IgnitionSolutionProviderRepository;

class AddSolutions implements FlareMiddleware
{
    protected SolutionProviderRepository|IgnitionSolutionProviderRepository $solutionProviderRepository;

    public function __construct(SolutionProviderRepository|IgnitionSolutionProviderRepository $solutionProviderRepository)
    {
        $this->solutionProviderRepository = $solutionProviderRepository;
    }

    public function handle(Report $report, Closure $next)
    {
        if ($throwable = $report->getThrowable()) {
            $solutions = $this->solutionProviderRepository->getSolutionsForThrowable($throwable);

            foreach ($solutions as $solution) {
                $report->addSolution($solution);
            }
        }

        return $next($report);
    }
}
