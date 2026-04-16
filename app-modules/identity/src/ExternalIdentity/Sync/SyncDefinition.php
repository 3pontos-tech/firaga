<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Sync;

use He4rt\Identity\ExternalIdentity\Enums\IdentityCapability;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use Illuminate\Database\Eloquent\Model;
use Saloon\Http\Connector;
use Saloon\Http\Request;

interface SyncDefinition
{
    /**
     * The capability this sync handles.
     */
    public function capability(): IdentityCapability;

    /**
     * If set, sync runs per mapped parent resource (e.g., notes per project).
     * Null means top-level sync using identity->external_account_id.
     */
    public function parentCapability(): ?IdentityCapability;

    /**
     * Create a Saloon connector for the given identity.
     */
    public function makeConnector(ExternalIdentity $identity): Connector;

    /**
     * Create a paginated Saloon request for the given resource ID and page.
     */
    public function makeRequest(string $resourceId, int $page): Request;

    /**
     * Transform a raw API item into the external_resource_data snapshot.
     *
     * @param  array<string, mixed>  $item
     * @return array<string, mixed>
     */
    public function mapData(array $item): array;

    /**
     * Optionally create an internal model when an IdentityResource is first synced.
     * Return null to skip auto-creation (e.g., projects need manual mapping).
     *
     * @param  array<string, mixed>  $item
     */
    public function autoCreate(array $item, ?Model $parent, ExternalIdentity $identity): ?Model;
}
