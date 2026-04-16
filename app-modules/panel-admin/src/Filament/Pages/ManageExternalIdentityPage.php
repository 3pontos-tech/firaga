<?php

declare(strict_types=1);

namespace He4rt\Admin\Filament\Pages;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use He4rt\Identity\ExternalIdentity\Actions\DisconnectIdentity;
use He4rt\Identity\ExternalIdentity\Enums\IdentityCapability;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use He4rt\Identity\ExternalIdentity\Models\IdentityResource;
use Illuminate\Database\Eloquent\Collection;

class ManageExternalIdentityPage extends Page
{
    public ExternalIdentity $identity;

    protected string $view = 'panel-admin::filament.pages.manage-external-identity';

    protected static ?string $slug = 'external-identities/{identity}';

    protected static bool $shouldRegisterNavigation = false;

    public function mount(ExternalIdentity $identity): void
    {
        abort_unless($identity->team_id === filament()->getTenant()->getKey(), 404);

        $this->identity = $identity;
    }

    public function getTitle(): string
    {
        return $this->identity->provider->getLabel();
    }

    /**
     * @return array{total: int, mapped: int, unmapped: int}
     */
    public function getResourceStats(): array
    {
        $total = $this->identity->resources()->count();
        $mapped = $this->identity->resources()->whereNotNull('resourceable_id')->count();

        return [
            'total' => $total,
            'mapped' => $mapped,
            'unmapped' => $total - $mapped,
        ];
    }

    /**
     * @return Collection<int, IdentityResource>
     */
    public function getProjectMappings(): Collection
    {
        return $this->identity->resourcesForCapability(IdentityCapability::Projects)
            ->with('resourceable')
            ->get();
    }

    public function syncProjectsAction(): Action
    {
        return Action::make('syncProjects')
            ->label('Sync Projects')
            ->icon('heroicon-o-arrow-path')
            ->action(function (): void {
                Notification::make()
                    ->title('Project sync started')
                    ->success()
                    ->send();
            });
    }

    public function disconnectAction(): Action
    {
        return Action::make('disconnect')
            ->color('danger')
            ->requiresConfirmation()
            ->modalHeading('Disconnect Integration')
            ->modalDescription('Are you sure you want to disconnect this integration? Resource mappings will be preserved.')
            ->action(function (): void {
                resolve(DisconnectIdentity::class)->handle($this->identity);

                Notification::make()
                    ->title('Integration disconnected')
                    ->success()
                    ->send();

                $this->redirect(ExternalIdentitiesPage::getUrl());
            });
    }
}
