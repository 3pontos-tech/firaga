<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Actions\GoHighLevel\GoHighLevelClient;
use Illuminate\Console\Command;

/**
 * GoHighLevel silently drops custom fields sent with an unknown key, so a wrong
 * mapping would never surface as an error. Run after configuring an account.
 */
class CheckGoHighLevelCustomFields extends Command
{
    protected $signature = 'gohighlevel:check-custom-fields';

    protected $description = 'Confere se os custom fields mapeados em services.gohighlevel.custom_fields existem na location configurada';

    public function handle(GoHighLevelClient $client): int
    {
        if (!$client->isConfigured()) {
            $this->error('Defina GOHIGHLEVEL_API_TOKEN e GOHIGHLEVEL_LOCATION_ID antes de conferir.');

            return self::FAILURE;
        }

        $response = $client->request()->get(sprintf('/locations/%s/customFields', $client->locationId()), ['model' => 'contact']);

        if ($response->failed()) {
            $this->error(sprintf('A GoHighLevel respondeu %d: %s', $response->status(), $response->body()));

            return self::FAILURE;
        }

        /** @var list<array{id: string, fieldKey: string}> $fields */
        $fields = $response->json('customFields', []);

        $existing = collect($fields)
            ->mapWithKeys(fn (array $field): array => [str($field['fieldKey'])->after('contact.')->toString() => $field['id']])
            ->all();

        /** @var array<string, string> $mapping */
        $mapping = config('services.gohighlevel.custom_fields');

        $rows = collect($mapping)
            ->map(fn (string $key, string $field): array => [$field, $key, $existing[$key] ?? '—', isset($existing[$key]) ? 'ok' : 'AUSENTE'])
            ->values()
            ->all();

        $this->table(['Campo', 'Chave', 'Id na GHL', 'Status'], $rows);

        $missing = collect($rows)->filter(fn (array $row): bool => $row[3] === 'AUSENTE')->count();

        if ($missing > 0) {
            $this->error(sprintf('%d custom field(s) não existem na location e seriam ignorados pela API.', $missing));

            return self::FAILURE;
        }

        $this->info('Todos os custom fields mapeados existem na location.');

        return self::SUCCESS;
    }
}
