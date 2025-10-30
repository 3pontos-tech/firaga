<?php

namespace App\Integrations\Actions;

use App\Integrations\HighLevelClient;
use Illuminate\Support\Facades\Cache;

final readonly class FetchOpportunityPipelines
{
    public function populateAction()
    {
        $baseTtl = 60 * 60;
        $cacheKey = sprintf(
            '%s_opportunity_pipelines',
            config('services.highlevel.location')
        );

        Cache::forget($cacheKey);

        return Cache::flexible($cacheKey, [$baseTtl, $baseTtl * 2], function (): array {
            $payload = app(HighLevelClient::class)->getLocationPipelines();

            $response = [];
            foreach ($payload['pipelines'] as $pipeline) {

                $options = [];
                foreach ($pipeline['stages'] as $stage) {
                    $options = array_merge($options, [
                        $stage['id'] => $stage['name'],
                    ]);
                }

                $response[$pipeline['name']] = $options;
            }

            return $response;
        });
    }
}
