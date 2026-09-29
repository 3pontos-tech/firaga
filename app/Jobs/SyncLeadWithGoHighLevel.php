<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Actions\GoHighLevel\GoHighLevelClient;
use App\Actions\GoHighLevel\UpsertContact;
use App\Actions\Leads\LeadData;
use Carbon\CarbonImmutable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Throwable;

class SyncLeadWithGoHighLevel implements ShouldQueue
{
    use Queueable;

    public int $tries = 5;

    public CarbonImmutable $submittedAt;

    public function __construct(public LeadData $lead)
    {
        $this->submittedAt = CarbonImmutable::now();
    }

    /**
     * @return list<int>
     */
    public function backoff(): array
    {
        return [30, 120, 600, 1800];
    }

    /**
     * The opportunity and the appointment run as separate jobs, so a failure in either
     * one retries on its own without recreating the contact.
     */
    public function handle(GoHighLevelClient $client, UpsertContact $upsertContact): void
    {
        if (!$client->isConfigured()) {
            Log::warning('GoHighLevel is not configured; lead was not synced.', $this->lead->summary());

            return;
        }

        $contactId = $upsertContact->handle($this->lead);

        dispatch(new CreateLeadOpportunity($contactId, $this->lead));
        dispatch(new CreateLeadAppointment($contactId, $this->lead, $this->submittedAt));
    }

    public function failed(?Throwable $exception): void
    {
        Log::error('GoHighLevel contact sync failed after all retries; reprocess manually with the payload below.', [
            'lead' => $this->lead->summary(),
            'exception' => $exception?->getMessage(),
        ]);
    }
}
