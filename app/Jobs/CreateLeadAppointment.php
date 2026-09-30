<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Actions\GoHighLevel\CreateAppointment;
use App\Actions\Leads\LeadData;
use Carbon\CarbonImmutable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Throwable;

class CreateLeadAppointment implements ShouldQueue
{
    use Queueable;

    public int $tries = 5;

    public function __construct(public string $contactId, public LeadData $lead, public CarbonImmutable $submittedAt) {}

    /**
     * @return list<int>
     */
    public function backoff(): array
    {
        return [30, 120, 600, 1800];
    }

    public function handle(CreateAppointment $createAppointment): void
    {
        $createAppointment->handle($this->contactId, $this->lead, $this->submittedAt);
    }

    public function failed(?Throwable $exception): void
    {
        Log::error('GoHighLevel appointment creation failed after all retries; reprocess it from failed_jobs with php artisan queue:retry.', [
            'contact_id' => $this->contactId,
            ...$this->lead->logContext(),
            'exception' => $exception?->getMessage(),
        ]);
    }
}
