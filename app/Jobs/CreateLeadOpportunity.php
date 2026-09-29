<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Actions\GoHighLevel\CreateOpportunity;
use App\Actions\Leads\LeadData;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Throwable;

class CreateLeadOpportunity implements ShouldQueue
{
    use Queueable;

    public int $tries = 5;

    public function __construct(public string $contactId, public LeadData $lead) {}

    /**
     * @return list<int>
     */
    public function backoff(): array
    {
        return [30, 120, 600, 1800];
    }

    public function handle(CreateOpportunity $createOpportunity): void
    {
        $createOpportunity->handle($this->contactId, $this->lead);
    }

    public function failed(?Throwable $exception): void
    {
        Log::error('GoHighLevel opportunity creation failed after all retries.', [
            'contact_id' => $this->contactId,
            'lead' => $this->lead->summary(),
            'exception' => $exception?->getMessage(),
        ]);
    }
}
