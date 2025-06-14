<?php

declare(strict_types=1);

namespace App\SingleResponsibilityPrinciple;

class ReportPrinter
{
    private ReportFormatter $formatter;

    public function __construct(ReportFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    public function print(Report $report): void
    {
        echo $this->formatter->format($report);
    }
}