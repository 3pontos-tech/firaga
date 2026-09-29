<?php

declare(strict_types=1);

namespace App\Actions\GoHighLevel;

use App\Actions\Leads\LeadData;
use App\Http\Middleware\CaptureLeadAttribution;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Log;

class UpsertContact
{
    public function __construct(private readonly GoHighLevelClient $client) {}

    /**
     * Creates the contact, or updates the existing one when the location rejects the
     * creation as a duplicate (same email or phone), returning the contact id.
     *
     * @throws RequestException
     */
    public function handle(LeadData $lead): string
    {
        $payload = [
            'locationId' => $this->client->locationId(),
            'firstName' => $lead->firstName,
            'email' => $lead->email,
            'phone' => $lead->phone,
            'source' => config('services.gohighlevel.source'),
            'tags' => $this->tags(),
            'customFields' => $this->customFields($lead),
        ];

        $response = $this->client->request()->post('/contacts/', $payload);

        if ($duplicateId = $this->duplicateContactId($response)) {
            $this->update($duplicateId, $lead);

            return $duplicateId;
        }

        if ($response->clientError() && $payload['customFields'] !== []) {
            Log::warning('GoHighLevel rejected the lead custom fields; creating the contact without them.', [
                'submission_id' => $lead->submissionId,
                'status' => $response->status(),
                'response' => $response->json(),
            ]);

            $response = $this->client->request()->post('/contacts/', [...$payload, 'customFields' => []]);
        }

        return (string) $response->throw()->json('contact.id');
    }

    /**
     * Returning contacts keep the campaign of their first touch: attribution fields are
     * left untouched and the new campaign is only logged, while quiz answers and the
     * origin page are refreshed with the latest submission.
     *
     * @throws RequestException
     */
    private function update(string $contactId, LeadData $lead): void
    {
        $attributionKeys = CaptureLeadAttribution::PARAMETERS;

        Log::info('GoHighLevel contact already exists; updating it instead of creating a duplicate.', [
            'submission_id' => $lead->submissionId,
            'contact_id' => $contactId,
            'new_attribution' => $lead->resolvedAttribution(),
        ]);

        $customFields = $this->customFields($lead, except: $attributionKeys);

        $this->client->request()->put('/contacts/'.$contactId, [
            'firstName' => $lead->firstName,
            'email' => $lead->email,
            'phone' => $lead->phone,
            'customFields' => $customFields,
        ])->throw();

        if ($this->tags() !== []) {
            $this->client->request()->post(sprintf('/contacts/%s/tags', $contactId), ['tags' => $this->tags()])->throw();
        }
    }

    private function duplicateContactId(Response $response): ?string
    {
        if (!$response->clientError()) {
            return null;
        }

        $contactId = $response->json('meta.contactId') ?? $response->json('meta.contact_id');

        return filled($contactId) ? (string) $contactId : null;
    }

    /**
     * @return list<string>
     */
    private function tags(): array
    {
        return array_values(config()->array('services.gohighlevel.tags'));
    }

    /**
     * Empty values are omitted so absent click ids never overwrite fields with "".
     *
     * @param  list<string>  $except
     * @return list<array{key: string, field_value: string}>
     */
    private function customFields(LeadData $lead, array $except = []): array
    {
        $values = [
            'situation' => $lead->situation->label(),
            'goal' => $lead->goal->label(),
            'availability' => $lead->availability->label(),
            'origin_page' => $lead->originPage,
            'origin_label' => $lead->originLabel,
            ...$lead->resolvedAttribution(),
        ];

        /** @var array<string, string> $mapping */
        $mapping = config('services.gohighlevel.custom_fields');

        return collect($mapping)
            ->except($except)
            ->filter(fn (string $key, string $field): bool => filled($values[$field] ?? null))
            ->map(fn (string $key, string $field): array => ['key' => $key, 'field_value' => (string) $values[$field]])
            ->values()
            ->all();
    }
}
