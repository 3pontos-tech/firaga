<?php

declare(strict_types=1);

namespace App\Actions\GoHighLevel;

use App\Actions\Leads\LeadData;
use App\Http\Middleware\CaptureLeadAttribution;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class UpsertContact
{
    public function __construct(private readonly GoHighLevelClient $client) {}

    /**
     * Upserts through POST /contacts/upsert, which deduplicates by email or phone
     * following the location's "Allow Duplicate Contact" setting, and returns the id.
     *
     * Returning contacts keep the campaign of their first touch: attribution fields and
     * source are only written when the upsert created the contact, while quiz answers
     * and the origin page are refreshed with the latest submission.
     *
     * @throws RequestException
     */
    public function handle(LeadData $lead): string
    {
        $attributionKeys = CaptureLeadAttribution::PARAMETERS;

        $payload = [
            'locationId' => $this->client->locationId(),
            'firstName' => $lead->firstName,
            'email' => $lead->email,
            'phone' => $lead->phone,
            'customFields' => $this->customFields($lead, except: $attributionKeys),
        ];

        $response = $this->client->request()->post('/contacts/upsert', $payload);

        if ($payload['customFields'] !== [] && $this->rejectsCustomFields($response)) {
            $this->logRejectedCustomFields($lead, $response);

            $response = $this->client->request()->post('/contacts/upsert', [...$payload, 'customFields' => []]);
        }

        $contactId = (string) $response->throw()->json('contact.id');

        // A retry after a partial failure gets "new: false" for the contact this very
        // submission created, so that fact is remembered to still write its first touch.
        $createdKey = 'leads:created-contact:'.$lead->submissionId;

        if ($response->json('new') === true) {
            Cache::put($createdKey, $contactId, now()->addDay());
            $this->warnAboutIgnoredCustomFields($lead, sent: count($payload['customFields']), stored: count($response->json('contact.customFields', [])));
        }

        if (Cache::get($createdKey) === $contactId) {
            $this->writeFirstTouch($contactId, $lead);
        } else {
            Log::info('GoHighLevel contact already existed; kept its first-touch attribution.', [
                'submission_id' => $lead->submissionId,
                'contact_id' => $contactId,
                'new_attribution' => $lead->resolvedAttribution(),
            ]);
        }

        if ($this->tags() !== []) {
            $this->client->request()->post(sprintf('/contacts/%s/tags', $contactId), ['tags' => $this->tags()])->throw();
        }

        return $contactId;
    }

    /**
     * @throws RequestException
     */
    private function writeFirstTouch(string $contactId, LeadData $lead): void
    {
        $response = $this->client->request()->put('/contacts/'.$contactId, [
            'source' => config('services.gohighlevel.source'),
            'customFields' => $this->customFields($lead, only: CaptureLeadAttribution::PARAMETERS),
        ]);

        if ($this->rejectsCustomFields($response)) {
            $this->logRejectedCustomFields($lead, $response);

            return;
        }

        $response->throw();
    }

    /**
     * Unknown keys are dropped without any error, so on a brand-new contact (whose
     * stored fields are exactly the ones just sent) a shorter list reveals a mapping
     * divergence.
     */
    private function warnAboutIgnoredCustomFields(LeadData $lead, int $sent, int $stored): void
    {
        if ($stored >= $sent) {
            return;
        }

        Log::warning('GoHighLevel ignored custom fields of the lead; run gohighlevel:check-custom-fields.', [
            'submission_id' => $lead->submissionId,
            'sent' => $sent,
            'stored' => $stored,
        ]);
    }

    /**
     * Only a validation error that names the custom fields justifies syncing without
     * them; any other 4xx (auth, rate limit, other fields) must fail so the queue retries.
     */
    private function rejectsCustomFields(Response $response): bool
    {
        return in_array($response->status(), [400, 422], true)
            && str_contains(mb_strtolower($response->body()), 'customfield');
    }

    private function logRejectedCustomFields(LeadData $lead, Response $response): void
    {
        Log::warning('GoHighLevel rejected the lead custom fields; syncing the contact without them.', [
            'submission_id' => $lead->submissionId,
            'status' => $response->status(),
        ]);
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
     * @param  list<string>|null  $only
     * @return list<array{key: string, fieldValue: string}>
     */
    private function customFields(LeadData $lead, array $except = [], ?array $only = null): array
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
            ->when($only !== null, fn (Collection $fields): Collection => $fields->only($only))
            ->filter(fn (string $key, string $field): bool => filled($values[$field] ?? null))
            ->map(fn (string $key, string $field): array => ['key' => $key, 'fieldValue' => (string) $values[$field]])
            ->values()
            ->all();
    }
}
