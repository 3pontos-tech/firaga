<?php

declare(strict_types=1);

namespace App\Actions\GoHighLevel;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

/**
 * Server-side only: the token and location id never reach the browser.
 */
class GoHighLevelClient
{
    public function isConfigured(): bool
    {
        return filled(config('services.gohighlevel.token')) && filled(config('services.gohighlevel.location_id'));
    }

    public function locationId(): string
    {
        return config()->string('services.gohighlevel.location_id');
    }

    public function request(): PendingRequest
    {
        return Http::baseUrl(config()->string('services.gohighlevel.base_url'))
            ->withToken(config()->string('services.gohighlevel.token'))
            ->withHeaders(['Version' => config()->string('services.gohighlevel.api_version')])
            ->acceptJson()
            ->asJson()
            ->timeout(10);
    }
}
