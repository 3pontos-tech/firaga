<?php

declare(strict_types=1);

namespace App\Actions\Leads;

use App\Enums\ContactWindow;
use App\Enums\FinancialGoal;
use App\Enums\FinancialSituation;

final readonly class LeadData
{
    /**
     * @param  array<string, string>  $attribution
     */
    public function __construct(
        public string $submissionId,
        public string $context,
        public FinancialSituation $situation,
        public FinancialGoal $goal,
        public ContactWindow $availability,
        public string $firstName,
        public string $email,
        public string $phone,
        public ?string $originPage,
        public ?string $originLabel,
        public array $attribution,
    ) {}

    /**
     * Visits without any campaign parameter are recorded explicitly as direct traffic,
     * following the Google Analytics convention, instead of leaving the origin empty.
     *
     * @return array<string, string>
     */
    public function resolvedAttribution(): array
    {
        return $this->attribution === []
            ? ['utm_source' => '(direct)', 'utm_medium' => '(none)']
            : $this->attribution;
    }

    /**
     * Log context without personal data (name, email, phone) or financial answers:
     * the full payload of a failed job already lives in the failed_jobs table, from
     * where it can be reprocessed with php artisan queue:retry.
     *
     * @return array{submission_id: string, context: string, origin_page: string|null}
     */
    public function logContext(): array
    {
        return [
            'submission_id' => $this->submissionId,
            'context' => $this->context,
            'origin_page' => $this->originPage,
        ];
    }
}
