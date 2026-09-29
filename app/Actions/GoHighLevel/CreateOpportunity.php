<?php

declare(strict_types=1);

namespace App\Actions\GoHighLevel;

use App\Actions\Leads\LeadData;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Log;

class CreateOpportunity
{
    public function __construct(private readonly GoHighLevelClient $client) {}

    /**
     * Opens an opportunity in the site pipeline, unless the contact already has an open
     * one there, so returning leads never pile up duplicated cards in the funnel.
     *
     * @throws RequestException
     */
    public function handle(string $contactId, LeadData $lead): void
    {
        $pipelineId = config('services.gohighlevel.pipeline_id');

        if (blank($pipelineId)) {
            Log::warning('GoHighLevel pipeline is not configured; skipping opportunity creation.', [
                'submission_id' => $lead->submissionId,
                'contact_id' => $contactId,
            ]);

            return;
        }

        $existing = $this->client->request()->get('/opportunities/search', [
            'location_id' => $this->client->locationId(),
            'pipeline_id' => $pipelineId,
            'contact_id' => $contactId,
            'status' => 'open',
        ])->throw()->json('opportunities', []);

        if ($existing !== []) {
            return;
        }

        $this->client->request()->post('/opportunities/', array_filter([
            'locationId' => $this->client->locationId(),
            'contactId' => $contactId,
            'pipelineId' => $pipelineId,
            'pipelineStageId' => config('services.gohighlevel.pipeline_stage_id'),
            'name' => $this->name($lead),
            'status' => 'open',
            'source' => config('services.gohighlevel.source'),
        ], filled(...)))->throw();
    }

    /**
     * Naming convention: "Site | <origin page> | <first name>", e.g. "Site | /nossos-servicos | Gabriel".
     */
    private function name(LeadData $lead): string
    {
        return sprintf('Site | %s | %s', $lead->originPage ?: '/', $lead->firstName);
    }
}
