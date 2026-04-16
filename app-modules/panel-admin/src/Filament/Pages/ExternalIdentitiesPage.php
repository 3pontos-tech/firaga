<?php

declare(strict_types=1);

namespace He4rt\Admin\Filament\Pages;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use He4rt\Identity\ExternalIdentity\Actions\DisconnectIdentity;
use He4rt\Identity\ExternalIdentity\Enums\IdentityProvider;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;

class ExternalIdentitiesPage extends Page
{
    protected string $view = 'panel-admin::filament.pages.external-identities';

    protected static ?string $slug = 'external-identities';

    protected static ?string $title = 'Integrations';

    protected static bool $shouldRegisterNavigation = false;

    /**
     * @return array<int, array{provider: IdentityProvider, identity: ExternalIdentity|null, connected: bool, total_resources: int, mapped_resources: int, unmapped_resources: int, last_synced_at: string|null}>
     */
    public function getProviderCards(): array
    {
        $identities = ExternalIdentity::query()
            ->where('team_id', filament()->getTenant()->getKey())
            ->get()
            ->keyBy(fn (ExternalIdentity $i) => $i->provider->value);

        return collect(IdentityProvider::cases())
            ->map(function (IdentityProvider $provider) use ($identities): array {
                $identity = $identities->get($provider->value);
                $totalResources = $identity?->resources()->count() ?? 0;
                $mappedResources = $identity?->resources()->whereNotNull('resourceable_id')->count() ?? 0;

                return [
                    'provider' => $provider,
                    'identity' => $identity,
                    'connected' => $identity !== null && $identity->isConnected(),
                    'total_resources' => $totalResources,
                    'mapped_resources' => $mappedResources,
                    'unmapped_resources' => $totalResources - $mappedResources,
                    'last_synced_at' => $identity?->metadata['last_projects_sync_at'] ?? null,
                ];
            })
            ->all();
    }

    public function disconnectAction(): Action
    {
        return Action::make('disconnect')
            ->requiresConfirmation()
            ->modalHeading('Disconnect Integration')
            ->modalDescription('Are you sure you want to disconnect this integration? Resource mappings will be preserved.')
            ->action(function (array $arguments): void {
                $identity = ExternalIdentity::query()->findOrFail($arguments['identity_id']);

                resolve(DisconnectIdentity::class)->handle($identity);

                Notification::make()
                    ->title('Integration disconnected')
                    ->success()
                    ->send();
            });
    }
}
