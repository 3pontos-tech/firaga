<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Http;

beforeEach(function (): void {
    Http::preventStrayRequests();

    config()->set('services.gohighlevel.token', 'pit-test-token');
    config()->set('services.gohighlevel.location_id', 'loc-123');
});

/**
 * @param  list<string>  $keys
 * @return array<string, mixed>
 */
function customFieldsResponse(array $keys): array
{
    return ['customFields' => array_map(fn (string $key): array => ['id' => 'id-'.$key, 'fieldKey' => 'contact.'.$key], $keys)];
}

it('passes when every mapped custom field exists in the location', function (): void {
    Http::fake(['https://services.leadconnectorhq.com/locations/loc-123/customFields*' => Http::response(customFieldsResponse(array_values(config('services.gohighlevel.custom_fields'))))]);

    $this->artisan('gohighlevel:check-custom-fields')
        ->expectsOutputToContain('Todos os custom fields mapeados existem na location.')
        ->assertSuccessful();
});

it('fails listing the mapped custom fields that the location does not have', function (): void {
    Http::fake(['https://services.leadconnectorhq.com/locations/loc-123/customFields*' => Http::response(customFieldsResponse(['situao_financeira', 'utm_source']))]);

    $this->artisan('gohighlevel:check-custom-fields')
        ->expectsOutputToContain('11 custom field(s) não existem na location')
        ->assertFailed();
});

it('fails without credentials and without calling the API', function (): void {
    config()->set('services.gohighlevel.token');

    $this->artisan('gohighlevel:check-custom-fields')->assertFailed();

    Http::assertNothingSent();
});
