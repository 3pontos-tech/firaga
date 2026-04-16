<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Sync;

use He4rt\Identity\ExternalIdentity\Enums\IdentityCapability;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use He4rt\Identity\ExternalIdentity\Models\IdentityResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Saloon\Http\Connector;
use Throwable;

class SyncExternalResources
{
    public function handle(ExternalIdentity $identity, SyncDefinition $definition): SyncResult
    {
        $connector = $definition->makeConnector($identity);

        $result = $definition->parentCapability() instanceof IdentityCapability
            ? $this->syncNested($connector, $definition, $identity)
            : $this->syncTopLevel($connector, $definition, $identity);

        $identity->update([
            'metadata' => array_merge($identity->metadata ?? [], [
                sprintf('last_%s_sync_at', $definition->capability()->value) => now()->toISOString(),
            ]),
        ]);

        return $result;
    }

    private function syncTopLevel(Connector $connector, SyncDefinition $definition, ExternalIdentity $identity): SyncResult
    {
        $resourceId = $identity->external_account_id;

        return $this->fetchAndUpsert($connector, $definition, $identity, $resourceId, null);
    }

    private function syncNested(Connector $connector, SyncDefinition $definition, ExternalIdentity $identity): SyncResult
    {
        $parentResources = $identity
            ->resourcesForCapability($definition->parentCapability())
            ->whereNotNull('resourceable_id')
            ->with('resourceable')
            ->get();

        $result = new SyncResult(0, 0, 0, 0);

        foreach ($parentResources as $parentResource) {
            $itemResult = $this->fetchAndUpsert(
                $connector,
                $definition,
                $identity,
                $parentResource->external_resource_id,
                $parentResource->resourceable,
            );

            $result = $result->merge($itemResult);
        }

        return $result;
    }

    private function fetchAndUpsert(
        Connector $connector,
        SyncDefinition $definition,
        ExternalIdentity $identity,
        string $resourceId,
        ?Model $parent,
    ): SyncResult {
        $allItems = [];
        $page = 1;

        do {
            $request = $definition->makeRequest($resourceId, $page);
            $response = $connector->send($request);
            $items = $response->json();
            $allItems = array_merge($allItems, $items);
            $page++;
        } while (count($items) >= 100);

        $created = 0;
        $updated = 0;
        $errors = 0;

        foreach ($allItems as $item) {
            try {
                $wasCreated = false;

                DB::transaction(function () use ($definition, $item, $parent, $identity, &$wasCreated): void {
                    $resource = IdentityResource::query()->updateOrCreate([
                        'external_identity_id' => $identity->id,
                        'capability' => $definition->capability(),
                        'external_resource_id' => (string) $item['id'],
                    ], [
                        'external_resource_data' => $definition->mapData($item),
                    ]);

                    $wasCreated = $resource->wasRecentlyCreated;

                    if ($wasCreated) {
                        $model = $definition->autoCreate($item, $parent, $identity);

                        if ($model instanceof Model) {
                            $resource->update([
                                'resourceable_type' => $model->getMorphClass(),
                                'resourceable_id' => $model->getKey(),
                            ]);
                        }
                    }
                });

                if ($wasCreated) {
                    $created++;
                } else {
                    $updated++;
                }
            } catch (Throwable $e) {
                Log::error(sprintf('[SyncExternalResources] Failed to sync %s item', $definition->capability()->value), [
                    'external_resource_id' => $item['id'] ?? 'unknown',
                    'identity_id' => $identity->id,
                    'error' => $e->getMessage(),
                ]);
                $errors++;
            }
        }

        return new SyncResult(count($allItems), $created, $updated, $errors);
    }
}
