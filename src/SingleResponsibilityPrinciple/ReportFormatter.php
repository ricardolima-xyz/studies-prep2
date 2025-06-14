<?php

declare(strict_types=1);

namespace App\SingleResponsibilityPrinciple;

class ReportFormatter
{
    public function format(Report $report): string
    {
        return sprintf(
            "Title: %s\nContent: %s",
            $report->getTitle(),
            $report->getContent()
        );
    }
}